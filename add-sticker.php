<?php

// $stickerName = str_replace(' ', '_', $_POST['stickerName']);
$stickerName = $_POST['stickerName'];
$giphyurl = $_POST['giphyurl'];

//$stickerContributor = $_POST['stickerContributor'];
if(!empty($_POST["stickerContributor"])) { 
	$stickerContributor = $_POST["stickerContributor"];
	} else {
	$stickerContributor = "anonymous";
}

$date = date("d m Y");

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("INSERT INTO `guestbook` (`id`, `giphyurl`, `stickerName`, `stickerDate`, `stickerContributor`) VALUES (NULL, '$giphyurl', '$stickerName', '$date', '$stickerContributor');");

$stmt->execute();

?>