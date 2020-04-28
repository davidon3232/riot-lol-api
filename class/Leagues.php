<?php

Class Leagues{
    
    public function __construct()
    {
        $this->urlAmigavel = new UrlAmigavel();
    }
    
    const LEAGUE_BY_SUMMONER_ID =  '/lol/league/v4/entries/by-summoner/';
    const CHALLENGER_BY_QUEUE =  '/lol/league/v4/challengerleagues/by-queue/';
    const LEAGUE_BY_TIER_DIVISION_QUEUE =  '/lol/league/v4/entries/';
    const GRANDMASTER_BY_QUEUE =  '/lol/league/v4/grandmasterleagues/by-queue/';
    const LEAGUES_BY_LEAGUEID =  '/lol/league/v4/leagues/';
    const MASTER_BY_QUEUE =  '/lol/league/v4/masterleagues/by-queue/';
      
    public function getLeagueBySummonerId($accountId)
    {
        $url = 'https://' .$_SESSION['region'] . self::LEAGUE_BY_SUMMONER_ID . $accountId .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        return $response;
        
    }
}
    
