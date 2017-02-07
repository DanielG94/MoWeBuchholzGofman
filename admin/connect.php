<?php
  $host     = "localhost";
  $dbname   = "schalkedb";
  $username = "root";
  $password = "";
  $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
?>
