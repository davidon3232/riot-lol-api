<?php

class Util
{

    public static function transformToUrl($string)
    {
        $from = '��������������������������� /#$|?&';
        $to = 'AAAAEEIOOOUUCaaaaeeiooouucC------e';
        $string = str_replace('--', '-', strtr($string, $from, $to));
        $string = preg_replace('/[^a-zA-Z0-9-\s]/', '', trim(strtolower($string)));
        return $string;
    }

    static function jsonEncode($dados)
    {
        self::utf8_encode_deep($dados);
        return json_encode($dados);
    }

    static function utf8_encode_deep(&$input)
    {
        if (is_string($input)) {
            $input = utf8_encode($input);
        } else if (is_array($input)) {
            foreach ($input as &$value) {
                self::utf8_encode_deep($value);
            }

            unset($value);
        } else if (is_object($input)) {
            $vars = array_keys(get_object_vars($input));

            foreach ($vars as $var) {
                self::utf8_encode_deep($input->$var);
            }
        }
    }

    static function dateDif($date_ini, $date_end)
    { // v 1.0 intervalo
        if (strcmp(substr($date_ini, 2, 1), "/") == 0) {
            $date_ini = substr($date_ini, 6, 4) . substr($date_ini, 2, 4) . substr($date_ini, 0, 2);
            $date_end = substr($date_end, 6, 4) . substr($date_end, 2, 4) . substr($date_end, 0, 2);
        }
        $initial_date = getdate(strtotime($date_ini));
        $final_date = getdate(strtotime($date_end));

        $dif = ($final_date['0'] - $initial_date['0']) / 86400;
        return $dif;
    }

    public static function transformRomanToNumber($league)
    {
        $division = '';
        switch ($league) {
            case "I":
                $division = 1;
                break;
            case "II":
                $division = 2;
                break;
            case "III":
                $division = 3;
                break;
            case "IV":
                $division = 4;
                break;
            default:
                $division = 'divisão não encontrada';
        }
        return $division;
    }

    public static function getQueueType($id)
    {
        switch ($id) {
            case 420: return "Ranqueada Solo";
                break;
            case 440: return "Ranqueada Flex";
                break;
            case 400: return "Normal";
                break;
            case 430: return "Normal";
                break;
            case 450: return "ARAM";
                break;
            case 900: return "URF";
                break;
        }
    }

    public static function numberFormat($number, $decimal, $definer)
    {
        return number_format($number, $decimal, $definer, ' ');
    }

    public static function porcentagem($parcial, $total)
    {
        return number_format(( $parcial * 100 ) / $total, 1, ',', ' ');
    }

    public static function calcAMA($ka, $d)
    {
        if ($d != 0) {
            $calc = number_format(( $ka ) / $d, 1, ',', ' ');
        } else {
            $calc = number_format(( $ka), 1, ',', ' ');
            ;
        }
        return $calc;
    }

    public static function ChIDToName($id)
    {
        switch ($id) {
            case 518: return "Neeko";
                break;
            case 235: return "Senna";
                break;
            case 246: return "Qiyana";
                break;
            case 517: return "Sylas";
                break;
            case 266: return "Aatrox";
                break;
            case 412: return "Thresh";
                break;
            case 23: return "Tryndamere";
                break;
            case 79: return "Gragas";
                break;
            case 555: return "Senna";
                break;
            case 69: return "Cassiopeia";
                break;
            case 136: return "AurelionSol";
                break;
            case 13: return "Ryze";
                break;
            case 78: return "Poppy";
                break;
            case 14: return "Sion";
                break;
            case 1: return "Annie";
                break;
            case 202: return "Jhin";
                break;
            case 43: return "Karma";
                break;
            case 111: return "Nautilus";
                break;
            case 240: return "Kled";
                break;
            case 99: return "Lux";
                break;
            case 103: return "Ahri";
                break;
            case 2: return "Olaf";
                break;
            case 112: return "Viktor";
                break;
            case 497: return "Rakan";
                break;
            case 34: return "Anivia";
                break;
            case 27: return "Singed";
                break;
            case 86: return "Garen";
                break;
            case 127: return "Lissandra";
                break;
            case 57: return "Maokai";
                break;
            case 25: return "Morgana";
                break;
            case 28: return "Evelynn";
                break;
            case 105: return "Fizz";
                break;
            case 74: return "Heimerdinger";
                break;
            case 238: return "Zed";
                break;
            case 145: return "Kaisa";
                break;
            case 68: return "Rumble";
                break;
            case 82: return "Mordekaiser";
                break;
            case 37: return "Sona";
                break;
            case 96: return "KogMaw";
                break;
            case 55: return "Katarina";
                break;
            case 117: return "Lulu";
                break;
            case 22: return "Ashe";
                break;
            case 30: return "Karthus";
                break;
            case 12: return "Alistar";
                break;
            case 122: return "Darius";
                break;
            case 67: return "Vayne";
                break;
            case 110: return "Varus";
                break;
            case 77: return "Udyr";
                break;
            case 89: return "Leona";
                break;
            case 126: return "Jayce";
                break;
            case 134: return "Syndra";
                break;
            case 80: return "Pantheon";
                break;
            case 92: return "Riven";
                break;
            case 121: return "Khazix";
                break;
            case 42: return "Corki";
                break;
            case 268: return "Azir";
                break;
            case 51: return "Caitlyn";
                break;
            case 76: return "Nidalee";
                break;
            case 85: return "Kennen";
                break;
            case 3: return "Galio";
                break;
            case 45: return "Veigar";
                break;
            case 432: return "Bard";
                break;
            case 150: return "Gnar";
                break;
            case 90: return "Malzahar";
                break;
            case 104: return "Graves";
                break;
            case 254: return "Vi";
                break;
            case 10: return "Kayle";
                break;
            case 39: return "Irelia";
                break;
            case 64: return "LeeSin";
                break;
            case 420: return "Illaoi";
                break;
            case 60: return "Elise";
                break;
            case 106: return "Volibear";
                break;
            case 20: return "Nunu";
                break;
            case 4: return "Twistedfate";
                break;
            case 24: return "Jax";
                break;
            case 102: return "Shyvana";
                break;
            case 429: return "Kalista";
                break;
            case 36: return "DrMundo";
                break;
            case 427: return "Ivern";
                break;
            case 131: return "Diana";
                break;
            case 223: return "Tahmkench";
                break;
            case 63: return "Brand";
                break;
            case 113: return "Sejuani";
                break;
            case 8: return "Vladimir";
                break;
            case 154: return "Zac";
                break;
            case 421: return "RekSai";
                break;
            case 133: return "Quinn";
                break;
            case 84: return "Akali";
                break;
            case 163: return "Taliyah";
                break;
            case 18: return "Tristana";
                break;
            case 120: return "Hecarim";
                break;
            case 15: return "Sivir";
                break;
            case 236: return "Lucian";
                break;
            case 107: return "Rengar";
                break;
            case 19: return "Warwick";
                break;
            case 72: return "Skarner";
                break;
            case 54: return "Malphite";
                break;
            case 157: return "Yasuo";
                break;
            case 101: return "Xerath";
                break;
            case 17: return "Teemo";
                break;
            case 75: return "Nasus";
                break;
            case 58: return "Renekton";
                break;
            case 119: return "Draven";
                break;
            case 35: return "Shaco";
                break;
            case 50: return "Swain";
                break;
            case 91: return "Talon";
                break;
            case 40: return "Janna";
                break;
            case 115: return "Ziggs";
                break;
            case 245: return "Ekko";
                break;
            case 61: return "Orianna";
                break;
            case 114: return "Fiora";
                break;
            case 9: return "Fiddlesticks";
                break;
            case 31: return "Chogath";
                break;
            case 33: return "Rammus";
                break;
            case 7: return "Leblanc";
                break;
            case 16: return "Soraka";
                break;
            case 26: return "Zilean";
                break;
            case 56: return "Nocturne";
                break;
            case 222: return "Jinx";
                break;
            case 83: return "Yorick";
                break;
            case 6: return "Urgot";
                break;
            case 203: return "Kindred";
                break;
            case 21: return "MissFortune";
                break;
            case 62: return "MonkeyKing";
                break;
            case 53: return "Blitzcrank";
                break;
            case 875: return "Sett";
                break;
            case 98: return "Shen";
                break;
            case 201: return "Braum";
                break;
            case 350: return "Yuumi";
                break;
            case 5: return "XinZhao";
                break;
            case 29: return "Twitch";
                break;
            case 11: return "MasterYi";
                break;
            case 44: return "Taric";
                break;
            case 32: return "Amumu";
                break;
            case 41: return "Gangplank";
                break;
            case 48: return "Trundle";
                break;
            case 38: return "Kassadin";
                break;
            case 142; return "Zoe";
                break;
            case 161: return "VelKoz";
                break;
            case 143: return "Zyra";
                break;
            case 267: return "Nami";
                break;
            case 59: return "JarvanIV";
                break;
            case 81: return "Ezreal";
                break;
            case 164: return "Camille";
                break;
            case 523: return "Aphelios";
                break;
            case 498: return "Xayah";
                break;
            case 516: return "Ornn";
                break;
            case 141: return "Kayn";
        }
    }

    public static function array_search_id($search_value, $array, $id_path = array('$'))
    {
        $search_value = str_replace('+', ' ', $search_value);
        if (is_array($array) && count($array) > 0) {
            foreach ($array as $key => $value) {
                $temp_path = $id_path;
                array_push($temp_path, $key);
                if ($value['player']['summonerName'] == $search_value) {
                    return $temp_path[1];
                }
            }
        } else {
            return null;
        }
    }

    public static function findAllOfTeam($summoners, $teamId)
    {
        $totalKills = 0;
        $totalDeaths = 0;
        $totalAssists = 0;
        $totalDamageToChamps = 0;
        $wins = 0;
        $totalTeamGold = 0;
        $looses = 0;
        foreach ($summoners as $key => $summoner) {
            if ($summoner['teamId'] == $teamId) {
                $summoner['stats']['win'] === true ? $wins += 1 : $looses += 1;
                $totalKills += $summoner['stats']['kills'];
                $totalDeaths += $summoner['stats']['deaths'];
                $totalAssists += $summoner['stats']['assists'];
                $totalTeamGold += $summoner['stats']['goldEarned'];
                $totalDamageToChamps += $summoner['stats']['totalDamageDealtToChampions'];
            }
        }
        $stats = array(
            'totalKills' => $totalKills,
            'totalDeaths' => $totalDeaths,
            'totalAssists' => $totalAssists,
            'totalDamageToChamps' => $totalDamageToChamps,
            'totalTeamGold' => $totalTeamGold,
            'wins' => $wins,
            'looses' => $looses
        );

        return $stats;
    }

    public static function getTeamArray($participants, $teamId)
    {
        $team = array();
        foreach ($participants as $key => $summoner) {
            if ($summoner['teamId'] == $teamId) {
                array_push($team, $summoner);
            }
        }
        return $team;
    }

    public static function getSummonerSpellsName($spellId)
    {
        switch ($spellId) {
            case 12: return "SummonerTeleport";
                break;
            case 14: return "SummonerDot";
                break;
            case 4: return "SummonerFlash";
                break;
            case 7: return "SummonerHeal";
                break;
            case 11: return "SummonerSmite";
                break;
            case 3: return "SummonerExhaust";
                break;
            case 21: return "SummonerBarrier";
                break;
            case 6: return "SummonerHaste";
                break;
        }
    }
    
    public static function getParksDir($parkId){
        
        $dir = '';
        
        $precision = array(8005,8008,8009,8010,8014,8017,8021,8299,9101,9103,9104,9105,9111);
        $domination = array(8105,8106,8112,8120,8124,8126,8128,8134,8135,8136,8138,8139,9923);
        $inspiration = array(8304,8306,8313,8316,8321,8345,8347,8351,8352,8358,8360,8410);
        $resolve = array(8242,8401,8429,8437,8439,8444,8446,8451,8453,8463,8465,8473);
        $sorcery = array(8210,8214,8224,8226,8229,8230,8232,8233,8234,8236,8237,8275);
        
        if(in_array($parkId, $precision)){
            $dir = 'Precision';
        }else if(in_array($parkId, $domination)){
            $dir = 'Domination';
        }else if(in_array($parkId, $inspiration)){
            $dir = 'Inspiration';
        }else if(in_array($parkId, $resolve)){
            $dir = 'Resolve';
        }else{
            $dir = 'Sorcery';
        }
        
        return $dir;
    }

}
