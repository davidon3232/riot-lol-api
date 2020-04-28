<?php

Class ImagesPath
{

    public static function getIconImagePath($icon)
    {
        return 'http://ddragon.leagueoflegends.com/cdn/10.8.1/img/profileicon/'. $icon .'.png';
    }
    
    public static function getTerRankPath($tier)
    {
        $rank = Util::transformRomanToNumber($tier);
        return BASE . 'images/ranks/'.$tier['tier'].'_'.$rank;
    }

}
