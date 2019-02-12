<?php
//error_reporting(0);
session_start();
require 'dbh.inc.php';

  $idTaco = $_GET['idTaco'];
  echo $idTaco;
  $kolicina = $_GET['kolicina'];
  echo $kolicina;

  $sql = "INSERT INTO kosarica (nameKosarica, priceKosarica, kolicinaKosarica, nameNarocnika)
        select nameTaco, priceTaco, ?, ?
        from taco
        WHERE idTaco = ?;" ;

$stmt = mysqli_prepare($conn, $sql ) ;
mysqli_stmt_bind_param($stmt, "isi", $_GET['kolicina'], $_SESSION['uid'], $idTaco);
mysqli_stmt_execute($stmt);


  header("Location: ../index.php?order=success");
?>
