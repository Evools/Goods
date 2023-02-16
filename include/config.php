<?php

// session_start();

$dbhost = 'localhost';
$dbname = 'goods';
$dbuser = 'root';
$dbpass = 'root';

try {
  $connect = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>