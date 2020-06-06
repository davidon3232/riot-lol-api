<?php

namespace Controller;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;

Class LeaguesCtl{
    
    const LEAGUE_BY_SUMMONER_ID =  '/lol/league/v4/entries/by-summoner/';
    const CHALLENGER_BY_QUEUE =  '/lol/league/v4/challengerleagues/by-queue/';
    const LEAGUE_BY_TIER_DIVISION_QUEUE =  '/lol/league/v4/entries/';
    const GRANDMASTER_BY_QUEUE =  '/lol/league/v4/grandmasterleagues/by-queue/';
    const LEAGUES_BY_LEAGUEID =  '/lol/league/v4/leagues/';
    const MASTER_BY_QUEUE =  '/lol/league/v4/masterleagues/by-queue/';
      
    public function getLeagueBySummonerId(string $accountId, string $region) : array
    {
        $client = $this->getFileCachedClient();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://' .$region . self::LEAGUE_BY_SUMMONER_ID . $accountId .  '?api_key=' . API_KEY);
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
    
