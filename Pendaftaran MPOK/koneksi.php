<?php
$dbhost ='localhost';
$dbuser ='u3144404_sahara';
$dbpass ='SaharaSavindo1996';
$dbname ='u3144404_datawarung';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $db = new PDO($db_dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo 'Connection failed: '.$e->getMessage();
}
