<?php

class Champions{
    public function __construct()
    {
        $this->urlAmigavel = new UrlAmigavel();
    }
    
    const CHAMPIONS_MASTERY_BY_SUMMONERID =  '/lol/champion-mastery/v4/champion-masteries/by-summoner/';
    const CHAMPIONS_SCORE_BY_SUMMONERID =  '/lol/champion-mastery/v4/scores/by-summoner/';
      
    public function getLeagueBySummonerId($summonerId)
    {
        $url = 'https://' .$_SESSION['region'] . self::CHAMPIONS_SCORE_BY_SUMMONERID . $summonerId .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        return $response;
        
    }
}

