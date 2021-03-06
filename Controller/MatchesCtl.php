<?php

namespace Controller;

use Lib;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;

class MatchesCtl
{

    public function __construct()
    {
        $this->urlAmigavel = new Lib\UrlAmigavel();
    }

    const MATCHES_LIST_BY_ACCOUNTID = '/lol/match/v4/matchlists/by-account/';
    const MATCH_BY_MATCHID = '/lol/match/v4/matches/';
    const CURRENT_MATCH = '/lol/spectator/v4/active-games/by-summoner/';
    const MATCH_TIMELINE = '/lol/match/v4/timelines/by-match/';

    public function getMatchesByAccountId(string $server, string $accountId, int $endIndex, int $beginIndex) : array
    {
        $region = Lib\regions::setRegion($server);
        
        $params = '&endIndex=' . $endIndex . '&beginIndex=' . $beginIndex;
        $url = 'https://' . $region . self::MATCHES_LIST_BY_ACCOUNTID . $accountId . '?api_key=' . API_KEY . '&?champion=30' . $params;
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();
    }

    public function getMatchByMatchId(string $server, array $allMatches) : array
    {   
        $region = Lib\regions::setRegion($server);

        $client = $this->getFileCachedClient();
        $promises = [];
        foreach ($allMatches as $value) {
            $url = 'https://' . $region . self::MATCH_BY_MATCHID . $value['gameId'] . '?api_key=' . API_KEY;
            $request = new \GuzzleHttp\Psr7\Request('GET', $url);
                $promises[] = $client->sendAsync($request)->then(function ($response) {
                return json_decode($response->getBody()->getContents(),true);
            });
        }
        $combinedPromise = \GuzzleHttp\Promise\all($promises);
        return $combinedPromise->wait();
    }

    public function getOneMatchByMatchId(int $matchId) : array
    {
        $url = 'https://' . $_SESSION['region'] . self::MATCH_BY_MATCHID . $matchId . '?api_key=' . API_KEY;
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();

    }
    
     public function getMatchTimeLineById($matchId)
    {
        $url = 'https://' . $_SESSION['region'] . self::MATCH_TIMELINE . $matchId . '?api_key=' . API_KEY;
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();

    }
    
    public function getCurrentMatch($summonerId)
    {
        $url = 'https://' . $_SESSION['region'] . self::CURRENT_MATCH . $summonerId . '?api_key=' . API_KEY;
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();

    }

    public function getPlayedTimesChamps($array)
    {
        $hash = array();
        $array_out = array();

        foreach ($array as $item) {
            $hash_key = $item['champion'];
            if (!array_key_exists($hash_key, $hash)) {
                $hash[$hash_key] = sizeof($array_out);
                array_push($array_out, array(
                    'champion' => $item['champion'],
                    'playedTimes' => 0,
                ));
            }
            $array_out[$hash[$hash_key]]['playedTimes'] += 1;
        }

        return $array_out;
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
