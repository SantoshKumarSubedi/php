<?php

try {
$pdo=new PDO('mysql:host=localhost;dbname=testing;charset=utf8','glory','Milanchock.99');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT id,joketext FROM jokes';
$jokes = $pdo->query($sql);

$title='All jokes';
ob_start();
include 'jokes.html.php';
$output=ob_get_clean();
} catch (PDOException $e) {
$output="cannot connect to server".$e;
}

include 'layout.html.php';
 ?>
