<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=testing;charset=utf8','glory','Milanchock.99');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql = 'DELETE FROM `jokes` WHERE `id` = :id';
$prep = $pdo->prepare($sql);
$prep->bindValue(':id',$_POST['id']);
$prep->execute();
header('Location:connection.php');
}catch(PODException $e){
$title = 'An error has occurred';
$output = 'Unable to connect to the database server:';
}
include 'layout.html.php';
 ?>
