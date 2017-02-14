<?php
  include('../connect.php');

  if(isset($_POST["approved"],$_POST["id"])){
    $id = $_POST["id"];
    if($_POST["approved"] == "true"){
      $sql = $pdo->prepare("UPDATE applications SET approved = 1 WHERE application_id = '$id'");
    }else{
      $sql = $pdo->prepare("UPDATE applications SET approved = 0 WHERE application_id = '$id'");
    }
  }
  if($sql->execute()){
    echo "Success";
  }else{
    echo "Error";
  }


?>
