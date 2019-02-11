<?php

require 'dbh.inc.php';

$idNarocilo = $_GET['idTaco'];

if (isset($idNarocilo)) {
  $sql = "DELETE FROM narocila WHERE idNarocilo = $idNarocilo";
  $result = mysqli_query($conn, $sql);
  header("Location: ../pregledNarocil.php?order=delete");
}

$idKosarica = $_GET['idKosarica'];

if (isset($idKosarica)) {
  $sql = "DELETE FROM kosarica WHERE idKosarica = $idKosarica";
  $result = mysqli_query($conn, $sql);
  header("Location: ../pregledNarocil.php?order=delete");
}


?>
