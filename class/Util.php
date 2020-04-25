<?php

class Util
{

    public static function transformToUrl($string)
    {
        $from = 'ΐΑΓΒΙΚΝΣΥΤΪάΗΰαγβικνσυτϊόηΗ /#$|?&';
        $to = 'AAAAEEIOOOUUCaaaaeeiooouucC------e';
        $string = str_replace('--', '-', strtr($string, $from, $to));
        $string = preg_replace('/[^a-zA-Z0-9-\s]/', '', trim(strtolower($string)));
        return $string;
    }

}
