<?php

Class Summoner{
    
    const SUMMMONER_BY_NAME =  '/lol/summoner/v4/summoners/by-name/';
    const SUMMMONER_BY_ACCOUNT_ID =  '/lol/summoner/v4/summoners/by-account/';
    const SUMMMONER_BY_PUIID =  '/lol/summoner/v4/summoners/by-puuid/';
    const SUMMMONER_BY_SUMMONER_ID =  '/lol/summoner/v4/summoners/';
    
    public function getSummoner()
    {
        $url = PLATAFORM . self::SUMMMONER_URI . 'TiaguinhoClash' .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        return $response;
        
    }
}
    
