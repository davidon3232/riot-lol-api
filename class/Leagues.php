<?php

Class Leagues{
    
    public function __construct()
    {
        $this->urlAmigavel = new UrlAmigavel();
    }
    
    const LEAGUE_BY_SUMMONER_ID =  '/lol/league/v4/entries/by-summoner/';
      
    public function getLeagueBySummonerId($accountId)
    {
        $url = 'https://' .$_SESSION['region'] . self::LEAGUE_BY_SUMMONER_ID . $accountId .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        var_dump($response);
        return $response;
        
    }
    
    private function transformRomanToNumber($string){
        switch ($string) {
            case "I":
                $string = 1;
                break;
            case "II":
                $string = 2;
                break;
            case "III":
                $string = 3;
                break;
            case "IV":
                $string = 4;
                break;
            default:
                $string = 'divisão não encontrada';
        }
        return $string;
    }
}
    
