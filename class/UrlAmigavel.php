<?php

/**
 * Description of UrlAmigavel
 *
 * @author Dayanne Ramos
 */
class UrlAmigavel
{
    
    private $parametrosUrl;

    public function __construct($url = '')
    {
        if ($url == '') {
            $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        }
        
        if ($url != '/' && substr($url, 0, 1) == '/') {
            $url = substr($url, 1);
        }
        if ($url == 'index.php') {
            $url = '';
        }

        $this->setParameters($url);
    }

    private function setParameters($url)
    {
        $explode = (isset($url)) ? $url : '';
        
        if (substr_count($explode, '/') > 0) {
            $explode_url = explode('/', $explode);

            foreach ($explode_url as $key => $parameter) {
                $filterParam = explode('?', $parameter);
                $explode_url[$key] = $filterParam[0];
            }
        } else {
            $filterParam = explode('?', $explode);
            $explode_url[0] = $filterParam[0];
        }
        $this->parametrosUrl = $explode_url;
    }

    static function getPages()
    {
        return self::$pages;
    }

    public function getPage()
    {
        return $this->parametrosUrl[0];
    }

    public function getParameter($indice)
    {
        return (isset($this->parametrosUrl[$indice]) ? $this->parametrosUrl[$indice] : '');
    }

    static function strtr_utf8safe($str, $from, $to)
    {
        $from = str_split(utf8_decode($from));
        $to = str_split(utf8_decode($to));
        for ($i = 0, $sf = count($from), $st = count($to); $i < $sf && $i < $st; $i++) {
            $str = str_replace(utf8_encode($from[$i]), $to[$i], $str);
        }
        return $str;
    }

    public function getParameters()
    {
        return $this->parametrosUrl;
    }

    public function getParametersUntil($indice)
    {
        return array_slice($this->parametrosUrl, 0, $indice);
    }

    public function getUrlAtePaginacao($indice)
    {
        $parameters = $this->getParametersUntil($indice);
        return self::transformToUrl($parameters) . '/';
    }

    public function getUrlCompleta()
    {
        return self::transformToUrl($this->parametrosUrl);
    }

    public static function transformToUrl($arr)
    {
        foreach ($arr as $key => $value) {
            $arr[$key] = Util::transformToUrl($value);
        }
        return implode('/', $arr);
    }

    public function getUrlCompletaLessPagination()
    {
        $params = $this->parametrosUrl;
        array_pop($params);
        return self::transformToUrl($params);
    }

}
