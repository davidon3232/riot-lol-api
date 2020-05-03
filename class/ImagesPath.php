<?php

Class ImagesPath
{

    public static function getIconImagePath($icon)
    {
        return 'http://ddragon.leagueoflegends.com/cdn/10.8.1/img/profileicon/' . $icon . '.png';
    }

    public static function getChampIconPath($champion)
    {
        return 'https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/' . $champion . '.png';
    }

    public static function getSummonerSpell($spellId)
    {
        return 'http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/' . $spellId . '.png';
    }

    public static function getItemsImg($itemId)
    {
        return 'https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/'.$itemId.'.png';
    }
    
    public static function getRunesImg($dir,$parkId)
    {
        return BASE . 'images/runes/' . $dir . '/' . $parkId.'.png';
    }
    
    public static function getSubRunesImg($parkId)
    {
        return BASE . 'images/runes/'.$parkId.'.png';
    }

    public static function getTierRankPath($rank, $tier)
    {
        $rank = Util::transformRomanToNumber($rank);
        return BASE . 'images/ranks/' . $tier . '_' . $rank;
    }

    public static function getChampSplasArt($name)
    {
        $name = str_replace(' ', '', $name);
        return 'style="background-image: url(' . BASE . 'images/splash/' . $name . '_0.jpg)"';
    }

}
