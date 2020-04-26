<?php

require_once('ajax.Header.php');

$region = $_POST['region'];
$_SESSION['region'] = Regions::setRegion($region);
$keyword = $_POST['keyword'];
echo Util::jsonEncode($keyword);
