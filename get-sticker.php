<?php

$stickerName = $_POST['stickerName'];
// $sticker = "drawing";

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stickerRequest = file_get_contents('https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag='.$stickerName);
$stickerResult = json_decode($stickerRequest, true);
// $sticker = $stickerResult["data"][0]["images"]["fixed_width_small"]["url"];

$sticker = $stickerResult["data"]["fixed_height_small_url"];
//var_dump($sticker);
?>