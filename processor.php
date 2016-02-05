<?php

$method = $_GET['method'];
$apikey = $_GET['apikey'];
$dc = explode('-', $apikey);
$datacenter = $dc[1];

$url = 'http://'.$datacenter.'.api.mailchimp.com/3.0/'.$method.'?apikey='.$apikey.'';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xmlPage = curl_exec($ch);
echo json_encode($xmlPage);
//var_dump($xmlPage);
curl_close($ch);
