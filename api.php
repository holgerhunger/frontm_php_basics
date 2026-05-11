<?php

/*header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');*/

include_once "classes/CryptoConverter.php";

$code = $_GET['code'] ?? "BTC";

$converter = new CryptoConverter($code);
$reateInUSD = $converter->convert();
echo "{\"rate\": $reateInUSD}";
