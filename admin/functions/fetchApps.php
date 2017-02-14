<?php
  include('../connect.php');

  $sql = "";
  $json = null;

  if(isset($_GET["type"])){
    switch($_GET["type"]){
      case "new":
        $sql = $pdo->prepare("SELECT application_id, prename, surname, email, phone, application, application_date, approved FROM applications WHERE approved IS NULL");
      break;
      case "yes":
        $sql = $pdo->prepare("SELECT application_id, prename, surname, email, phone, application, application_date, approved FROM applications WHERE approved=1");
      break;
      case "no":
        $sql = $pdo->prepare("SELECT application_id, prename, surname, email, phone, application, application_date, approved FROM applications WHERE approved=0");
      break;
    }
  }
  if(!empty($sql)){
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $json=json_encode($result);
  }else{
    $json = null;
  }


  echo $json;

?>
