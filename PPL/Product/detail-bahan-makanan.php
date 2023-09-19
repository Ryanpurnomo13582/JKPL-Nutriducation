<?php


$app_id = '9347674b';
$apikey = '96865767f90b24c3546329a90efb51c4';
$ntrtype = 'logging';
$weight = 100;
$method = 'grilled';
$raw_mtr = 'chicken';
$part_raw_mtr = 'breast';
//$weight . ' gram ' . $method . ' ' . $raw_mtr . ' ' . $part_raw_mtr
if (isset($_GET['id']))
    $coba = $_GET['id'];
$ingr = urlencode('1750 ml ' . $_GET['id']);
//$ingr = '1000 ml Pineapple-Mint Vodka';
//var_dump($ingr);
$url = 'https://api.edamam.com/api/nutrition-data?' . 'app_id='  . $app_id . '&app_key=' . $apikey . '&nutrition-type=' . $ntrtype . '&ingr=' . $ingr;
$konten = file_get_contents($url);
var_dump($konten);

/*$encoded_data = json_encode();

file_put_contents('', $encoded_data);
$json_data*/
