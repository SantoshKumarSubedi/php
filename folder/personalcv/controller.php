<?php
$title="Home";
ob_start();
include 'homepage.html.php';
$output=ob_get_clean();
include 'index.html.php';
?>
