<?php

$host = 'localhost';
$psw = 'root';
$port = '3307';
$user = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
    \PDO::ATTR_ERRMODE    =>   \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE     =>  \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES => false,
];

if (empty($db)){
  $db = $dbname;}

try {
  $pdo2 = new PDO($dsn,$user,$psw,$options);
  echo 'connection etablished ';
}
catch (\PDOException $e) {
  throw new \PDOException($e->getCode(), $e->getMessage());
}
?>

