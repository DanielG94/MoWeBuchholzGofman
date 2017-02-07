<h2>Abgelehnte Bewerbungen</h2>

<?php
  include('connect.php');
  $sql = $pdo->prepare("SELECT prename, surname, email, phone, application, application_date FROM applications WHERE approved = 0");
  $sql->execute();

  $result = $sql->fetchAll();
  for($i=0; $i<sizeof($result); $i++) {
      echo"
      <div class='application'>
        <table>
        <tr>
          <th>Name</th>
          <td>". $result[0]['prename']." ".$result[0]['surname']."</td>
        </tr>
        <tr>
          <th>E-Mail</th>
          <td>". $result[0]['email']."</td>
        </tr>
        <tr>
          <th>Telefon</th>
          <td>". $result[0]['phone']."</td>
        </tr>
        <tr>
          <th>Bewerbungsdatum</th>
          <td>". $result[0]['application_date']."</td>
        </tr>
        <tr>
          <th>Bewerbungstext</th>
          <td>". $result[0]['application']."</td>
        </tr>
        <tr>
          <th>Angenommen</th>
          <td>". $result[0]['approved']."</td>
        </tr>
      </table>
    </div>";
  }
?>
