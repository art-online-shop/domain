<?php

$HTTP_HOST = $_SERVER['HTTP_HOST'];
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$REQUEST_URI = preg_replace("/[^,.0-9]/", '', $REQUEST_URI);
$REQUEST_URI;
$timestamp = date("Y-m-d H:i:s");

$hostbd = 'localhost';  
$databasebd = 'track'; 
$userbd = 'track'; 
$passwordbd = 'wG8iP2sT'; 

$link = mysqli_connect($hostbd, $databasebd, $passwordbd, $databasebd); 
mysqli_set_charset($link, 'utf8');
$ip = $_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO `track`.`clic` (`id`, `id2`, `data`, `ip`, `status`) VALUES (NULL, '$HTTP_HOST;$REQUEST_URI','$timestamp', '$ip', NULL);";

$result_sql = mysqli_query($link, $sql);

header('Location: https://www.jcat.ru/registration/?p=1065323');


?>
