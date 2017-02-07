<form id="application" action="" method="post">
  <h1>Bewerbung</h1>
  <table>
    <tr>
      <td><label>Vorname:</label></td>
      <td><input type="text" name="prename"></td>
    </tr>
    <tr>
      <td><label>Nachname:</label></td>
      <td><input type="text" name="surname"></td>
    </tr>
    <tr>
      <td><label>E-Mail:</label></td>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <td><label>Telefon:</label></td>
      <td><input type="text" name="phone"></td>
    </tr>
    <tr>
      <td><label>Bewerbung:</label></td>
      <td><textarea name="application"></textarea></td>
    </tr>
  </table>
  <button type="submit" name="submit">Senden</button>
</form>
<?php
  include "admin/connect.php";
  if (isset($_POST['submit'])){
    $prename = ($_POST['prename']);
    $surname  = ($_POST['surname']);
    $mail = ($_POST['mail']);
    $phone  = ($_POST['phone']);
    $application = ($_POST['application']);
    $date = date("Y-m-d");
    $statement = $pdo->prepare("INSERT INTO applications(prename, surname,
                                email, phone, application, application_date)
                                VALUES(:prename, :surname, :mail, :phone,
                                :application, :appdate)");
    if($statement->execute(array(
      ':prename' =>$prename,
      ':surname' =>$surname,
      ':mail' =>$mail,
      ':phone' =>$phone,
      ':application' =>$application,
      ':appdate' => $date
    ))){
      echo "Eintrag erfolgreich";
    }
    else {
      print_r($pdo->errorInfo());
    }
  }
?>
