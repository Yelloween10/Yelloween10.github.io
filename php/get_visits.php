<?php

$universeId = '4398657302';
$url = "https://games.roblox.com/v1/games?universeIds=" . $universeId;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

if (isset($data['data'][0]['visits'])) {
    $visits = $data['data'][0]['visits'];
    echo $visits;
} else {
    echo "0";
}

?>