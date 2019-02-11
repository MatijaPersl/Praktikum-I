<?php
//error_reporting(0);
session_start();
require 'dbh.inc.php';

  $idTaco = $_GET['idTaco'];
  echo $idTaco;

  $sql = "INSERT INTO kosarica (nameKosarica, priceKosarica, nameNarocnika)
          select nameTaco, priceTaco, ?
          FROM taco
          WHERE idTaco = ?;" ;

  $stmt = mysqli_prepare($conn, $sql ) ;
  mysqli_stmt_bind_param($stmt, "si",$_SESSION['uid'], $idTaco);
  mysqli_stmt_execute($stmt);


  header("Location: ../index.php?order=success");
?>
