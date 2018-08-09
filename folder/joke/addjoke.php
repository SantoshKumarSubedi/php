<?php
if(isset($_POST['joketext']))
{
try{
  $pdo = new PDO('mysql:host=localhost;dbname=testing;charset=utf8','glory','Milanchock.99');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sql = 'INSERT INTO `jokes` SET
  `joketext` = :joketext,
  `jokedate` = CURDATE()';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':joketext', $_POST['joketext']);
  $stmt->execute();
  header('Location:connection.php');
}catch(PDOException $e){
  $title="an error has occur";

  $output="database error".$e;

}
}else
{
  $title="add a new joke";

  ob_start();
  include 'form.html.php';
  $output=ob_get_clean();
}

include 'layout.html.php';
 ?>
