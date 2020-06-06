<?php

namespace Lib;

Class regions{
    
    public static function setRegion(string $uf) : string{
        $arrRegions = array(
            'br1' => 'br1.api.riotgames.com', 
            'eun1' => 'eun1.api.riotgames.com', 
            'euw1' => 'euw1.api.riotgames.com', 
            'jp1' => 'jp1.api.riotgames.com', 
            'kr' => 'kr.api.riotgames.com', 
            'la1' => 'la1.api.riotgames.com', 
            'la2' => 'la1.api.riotgames.com', 
            'na1' => 'na1.api.riotgames.com',
            'oc1' => 'oc1.api.riotgames.com', 
            'tr1' => 'tr1.api.riotgames.com', 
            'ru' => 'ru.api.riotgames.com'
        );
        return $arrRegions[$uf];
    }
    
}