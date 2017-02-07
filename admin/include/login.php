<?php
include('connect.php');

if(isset($_POST['submit'])) {
 $username = $_POST['user'];
 $passwort = $_POST['passwort'];

 $statement = $pdo->prepare("SELECT * FROM users WHERE username = :user");
 $result = $statement->execute(array(':user' => $username));
 $user = $statement->fetch();

 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['user_password'])) {
   $_SESSION['userid'] = $user['user_id'];
   header("location:index.php");
 } else {
   $errorMessage = "Benutzername oder Passwort war ungültig<br>";
 }

}
?>

<?php
  if(isset($errorMessage)) {
   echo $errorMessage;
  }
?>

<form action="" method="post">
  User:<br>
  <input type="text" size="40" maxlength="250" name="user"><br><br>
  Dein Passwort:<br>
  <input type="password" size="40"  maxlength="250" name="passwort"><br>
  <input type="submit" name="submit" value="Abschicken">
</form>
