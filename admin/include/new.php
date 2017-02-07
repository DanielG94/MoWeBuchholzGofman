<h2>Neue Bewerbungen</h2>

<?php
  include('connect.php');
  $sql = $pdo->prepare("SELECT prename, surname, email, phone, application, application_date, approved FROM applications");
  $sql->execute();

  $result = $sql->fetchAll();
  for($i=0; $i<sizeof($result); $i++) {
      echo"
      <div class='application'>
        <table>
        <tr>
          <th>Name</th>
          <td>". $result[$i]['prename']." ".$result[$i]['surname']."</td>
        </tr>
        <tr>
          <th>E-Mail</th>
          <td>". $result[$i]['email']."</td>
        </tr>
        <tr>
          <th>Telefon</th>
          <td>". $result[$i]['phone']."</td>
        </tr>
        <tr>
          <th>Bewerbungsdatum</th>
          <td>". $result[$i]['application_date']."</td>
        </tr>
        <tr>
          <th>Bewerbungstext</th>
          <td>". $result[$i]['application']."</td>
        </tr>
        <tr>
          <td><button type='button' class='approve'><i class='fa fa-check'></i></button></td>
          <td><button type='button' class='deny'><i class='fa fa-times'></i></button></td>
        </tr>
      </table>
    </div>";
  }
?>
