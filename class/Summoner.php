<?php
use GuzzleHttp\Client;

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
        
        $client = new Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://' .$_SESSION['region'] . self::SUMMMONER_BY_NAME . $summonerName .  '?api_key=' . API_KEY);
        $promise = $client->sendAsync($request)->then(function ($response) {
            return json_decode($response->getBody()->getContents(),true);
        });

        return $promise->wait();
        
    }

}
    
