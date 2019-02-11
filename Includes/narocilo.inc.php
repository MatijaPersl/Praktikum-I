<?php
session_start();
require 'dbh.inc.php';
error_reporting(0);


  $sql = "INSERT INTO narocila (nameNarocilo, priceNarocilo, nameNarocnik)
        SELECT nameKosarica, priceKosarica, ?
        FROM kosarica
        WHERE nameNarocnika = ?;" ;

  $stmt = mysqli_prepare($conn, $sql ) ;
  mysqli_stmt_bind_param($stmt, "ss",$_SESSION['uid'], $_SESSION['uid']);
  mysqli_stmt_execute($stmt);


  $sql2 = "DELETE FROM kosarica WHERE nameNarocnika = ?";
  $stmt2 = mysqli_prepare($conn, $sql2) ;
  mysqli_stmt_bind_param($stmt2, "s", $_SESSION['uid']);
  mysqli_stmt_execute($stmt2);


  header("Location: ../index.php?order=successful");
