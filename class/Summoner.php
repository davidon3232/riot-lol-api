<?php

Class Summoner{
    
    const SUMMMONER_URI =  '/lol/summoner/v4/summoners/by-name/';
    
    public function getSummoner()
    {
        $url = PLATAFORM . self::SUMMMONER_URI . 'TiaguinhoClash' .  '?api_key=' . API_KEY;
        $reponse = Curl::send($url);
        return $response;
        
    }
}
    
