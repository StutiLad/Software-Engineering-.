<?php
$city = "Smile";
// $API_KEY = '0ee877f124ac6b19a8a5f8f76287b0a1';

$url = "http://api.giphy.com/v1/gifs/search?q=$city&api_key=PB0iduzYnlhKGxZDvYoXMFujAWAx3h6E&limit=5";

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");     #important

$res = curl_exec($ch);

// echo htmlspecialchars($res);
echo "<pre>";
print_r($res);
echo "</pre>";