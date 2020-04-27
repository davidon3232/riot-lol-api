<?php

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
        $summonerName = $this->urlAmigavel->getParameter(2);
        $url = 'https://' .$_SESSION['region'] . self::SUMMMONER_BY_NAME . $summonerName .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        return $response;
        
    }

}
    
