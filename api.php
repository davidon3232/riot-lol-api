<?php 

$url = "https://br1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/u6nCn2b8j66GqWvBQDoTEa55zxaSOkeqkj2Pln62BfwK7Bs?api_key=RGAPI-730b7e40-1643-43f7-8042-24fd4f6a1e72";

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

$array = json_decode($result, true);
$temp = $array[46]['lastPlayTime'] / 1000;
var_dump("d/m/Y H:i:s", $temp);

// Print the return data
var_dump($array[46]['lastPlayTime']);

