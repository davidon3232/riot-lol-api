<?php

class Matches{
    public function __construct()
    {
        $this->urlAmigavel = new UrlAmigavel();
    }
    
    const MATCHES_LIST_BY_ACCOUNTID =  '/lol/match/v4/matchlists/by-account/';
    const MATCH_BY_MATCHID =  '/lol/match/v4/matches/';
      
    public function getMatchesByAccountId($accountId)
    {
        $url = 'https://' .$_SESSION['region'] . self::MATCHES_LIST_BY_ACCOUNTID . $accountId .  '?api_key=' . API_KEY . '&?champion=30';
        $response = Curl::send($url);
        return $response;
        
    }
    
    public function getMatchByMatchId($matchId)
    {
        $url = 'https://' .$_SESSION['region'] . self::MATCH_BY_MATCHID . $matchId .  '?api_key=' . API_KEY;
        $response = Curl::send($url);
        return $response;
        
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

}
