<?php

require_once('../config.php');

$region = $_POST['region'];
$_SESSION['region'] = Regions::setRegion($region);
$_SESSION['summonerName'] = $_POST['keyword'];
$keyword = $_POST['keyword'];
echo Util::jsonEncode($keyword);
