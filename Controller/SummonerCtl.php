<?php

namespace Controller;
use Lib;
use League\Plates\Engine;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;


class SummonerCtl{
    
    private $view;

    public function __construct()
    {
        $this->view = new Engine('view');
        $this->urlAmigavel = new Lib\UrlAmigavel();
    }
    
    const SUMMMONER_BY_NAME =  '/lol/summoner/v4/summoners/by-name/';
    const SUMMMONER_BY_ACCOUNT_ID =  '/lol/summoner/v4/summoners/by-account/';
    const SUMMMONER_BY_PUIID =  '/lol/summoner/v4/summoners/by-puuid/';
    const SUMMMONER_BY_SUMMONER_ID =  '/lol/summoner/v4/summoners/';
    
    public function getSummonerByName(array $data) : void
    {
        $name = $data['name'];
        
        $server = Lib\regions::setRegion($data['server']);
        
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://' . $server . self::SUMMMONER_BY_NAME . $name .  '?api_key=' . API_KEY);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });
        
        $summoner = $promise->wait();
        $leagueObj = new LeaguesCtl(); 
        $league = $leagueObj->getLeagueBySummonerId($summoner['id'],$server);
        
        $matchesObj = new MatchesCtl();
        $matchesIds = $matchesObj->getMatchesByAccountId($data['server'] ,$summoner['accountId'] ,15 ,0);
        $matches = $matchesObj->getMatchByMatchId($data['server'], $matchesIds['matches']);
        $matches = $this->treatMatchsToView($matches, $summoner);
   
        echo $this->view->render('invocador',[
            'summoner' => $summoner,
            'league' => $league,
            'matches' => $matches['matches'],
            'stats' => $matches['stats']
        ]);
        
    }

    private function treatMatchsToView(array $data, array $summoner) : array
    {
        $matches = array();
        $wins = 0;
        $looses = 0;
        $allKills = 0;
        $allDeaths = 0;
        $allAssists = 0;

        foreach($data as $key => $value){

            $index = Lib\Util::array_search_id($summoner['name'], $value['participantIdentities']);
            $allOfTeam = Lib\Util::findAllOfTeam($value['participants'], $value['participants'][$index]['teamId']);
            $allKills += $value['participants'][$index]['stats']['kills'];
            $allDeaths += $value['participants'][$index]['stats']['deaths'];
            $allAssists += $value['participants'][$index]['stats']['assists'];
            $value['participants'][$index]['stats']['win'] === true ? $wins += 1 : $looses += 1;

            $matches[$key] = array(
                'champName' => Lib\Util::ChIDToName($value['participants'][$index]['championId']),
                'gameDuration' => gmdate('i:s', $value['gameDuration']),
                'gameDurationMili' => $value['gameDuration'],
                'ama' => Lib\Util::calcAMA($value['participants'][$index]['stats']['kills'] + $value['participants'][$index]['stats']['assists'], $value['participants'][$index]['stats']['deaths']),
                'kda' => $value['participants'][$index]['stats']['kills'] . ' / ' . $value['participants'][$index]['stats']['deaths'] . ' / ' . $value['participants'][$index]['stats']['assists'],
                'visaoPerMinute' => number_format($value['participants'][$index]['stats']['visionScore'] / ($value['gameDuration'] / 60), 2, '.', ' '),
                'pa' => Lib\Util::porcentagem($value['participants'][$index]['stats']['kills'] + $value['participants'][$index]['stats']['assists'], $allOfTeam['totalKills']),
                'csPerMinute' => number_format(($value['participants'][$index]['stats']['totalMinionsKilled'] + $value['participants'][$index]['stats']['neutralMinionsKilled']) / ($value['gameDuration'] / 60), 1, '.', ' '),
                'csTotal' => $value['participants'][$index]['stats']['totalMinionsKilled'] + $value['participants'][$index]['stats']['neutralMinionsKilled'],
                'damagePerMinute' => number_format($value['participants'][$index]['stats']['totalDamageDealtToChampions'] / ($value['gameDuration'] / 60), 0, '.', ' '),
                'damageByTeam' => Lib\Util::porcentagem($value['participants'][$index]['stats']['totalDamageDealtToChampions'], $allOfTeam['totalDamageToChamps']) ,
                'gameMode' => Lib\Util::getQueueType($value['queueId']),
                'win' => $value['participants'][$index]['stats']['win']
            ); 
        }
        $stats = array(
            'winsQtd' => $wins,
            'loosesQtd' => $looses,
            'totalKda' => Lib\Util::calcAMA($allKills + $allAssists , $allDeaths),
            'allKills' => number_format($allKills / count($matches),1,'.',''),
            'allDeaths' => number_format($allDeaths / count($matches),1,'.',''),
            'allAssists' => number_format($allAssists / count($matches),1,'.','')
        );
        return array('matches' => $matches, 'stats' => $stats);
    }
     private function getFileCachedClient(){
        
           $stack = HandlerStack::create();
           $TTL = 600;
           
           $requestCacheFolderName = 'GuzzleFileCache';
           
           $cacheFolderPath =  "./cache";

           $cache_storage = new Psr6CacheStorage(
               new FilesystemAdapter(
                   $requestCacheFolderName,
                   $TTL, 
                   $cacheFolderPath
               )
           );

           $stack->push(
               new CacheMiddleware(
                   new GreedyCacheStrategy(
                       $cache_storage,
                       $TTL
                   )
               ), 
               'greedy-cache'
           );

           return new Client(['handler' => $stack]);
       }

}
    
