<?php
error_reporting(0);
require 'dbh.inc.php';

$idNarocilo = $_GET['idTaco'];
$idKosarica = $_GET['idKosarica'];

if (isset($idNarocilo)) {
  $sql = "DELETE FROM narocila WHERE idNarocilo = $idNarocilo";
  $result = mysqli_query($conn, $sql);
  header("Location: ../pregledNarocil.php?order=delete");
}

if (isset($idKosarica)) {
  $sql = "DELETE FROM kosarica WHERE idKosarica = $idKosarica";
  $result = mysqli_query($conn, $sql);
  header("Location: ../kosarica.php?order=delete");
}


?>
