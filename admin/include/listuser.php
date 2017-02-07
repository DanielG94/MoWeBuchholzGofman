<?php
  include('connect.php');
  $sql = "SELECT username, user_password FROM users";
  foreach ($pdo->query($sql) as $row) {
    echo $row['username']." ".$row['user_password']."<br />";
  }
?>
