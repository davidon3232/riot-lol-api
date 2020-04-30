<?php

Class ImagesPath
{

    public static function getIconImagePath($icon)
    {
        return 'http://ddragon.leagueoflegends.com/cdn/10.8.1/img/profileicon/'. $icon .'.png';
    }
    
    public static function getChampIconPath($champion)
    {
        return 'https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/'. $champion .'.png';
    }
    
    public static function getTierRankPath($rank,$tier)
    {
        $rank = Util::transformRomanToNumber($rank);
        return BASE . 'images/ranks/'.$tier.'_'.$rank;
    }
    
    public static function getChampSplasArt($name){
        return 'style="background-image: url('.BASE.'images/splash/'.$name.'_0.jpg)"';
    }

}
