<?php
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;

Class Summoner{
    
    public function __construct()
    {
        $this->urlAmigavel = new UrlAmigavel();
    }
    
    const SUMMMONER_BY_NAME =  '/lol/summoner/v4/summoners/by-name/';
    const SUMMMONER_BY_ACCOUNT_ID =  '/lol/summoner/v4/summoners/by-account/';
    const SUMMMONER_BY_PUIID =  '/lol/summoner/v4/summoners/by-puuid/';
    const SUMMMONER_BY_SUMMONER_ID =  '/lol/summoner/v4/summoners/';
    
    
    public function getSummonerByName()
    {
        $summonerName = $_SESSION['summonerName'];
        if($this->urlAmigavel->getParameter(1) != 'ajax'){
            $summonerName = $this->urlAmigavel->getParameter(2);
        }
        
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://' .$_SESSION['region'] . self::SUMMMONER_BY_NAME . $summonerName .  '?api_key=' . API_KEY);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();
        
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
    
