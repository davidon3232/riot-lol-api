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
    
    static function jsonEncode($dados) {
        self::utf8_encode_deep($dados);
        return json_encode($dados);
    }
    
    static function utf8_encode_deep(&$input) {
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
    
    static function dateDif($date_ini, $date_end) { // v 1.0 intervalo
        if (strcmp(substr($date_ini, 2, 1), "/") == 0) {
            $date_ini = substr($date_ini, 6, 4) . substr($date_ini, 2, 4) . substr($date_ini, 0, 2);
            $date_end = substr($date_end, 6, 4) . substr($date_end, 2, 4) . substr($date_end, 0, 2);
        }
        $initial_date = getdate(strtotime($date_ini));
        $final_date = getdate(strtotime($date_end));

        $dif = ($final_date['0'] - $initial_date['0']) / 86400;
        return $dif;
    }

}
