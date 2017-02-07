Neuen Benutzer registrieren:
<form action="" method="post">
    <label>Benutzername:</label>
    <input type="text" name="txtvorname"><br>
    <label>Passwort:</label>
    <input type="password" name="txtpassword"><br>
    <input type="submit" name="submit">
</form>
<?php
  include "connect.php";
  if (isset($_POST['submit'])){
    $txtpassword = password_hash($_POST['txtpassword'], PASSWORD_DEFAULT);
    $txtvorname  = $_POST['txtvorname'];
    $statement = $pdo->prepare("INSERT INTO users(username, user_password) VALUES(:username, :password)");
    if($statement->execute(array(
      ':username' =>$txtvorname,
      ':password' =>$txtpassword
    ))){
      echo "Eintrag erfolgreich";
    }
    else {
      print_r($pdo->errorInfo());
    }
  }
?>
