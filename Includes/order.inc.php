<?php
session_start();

if (isset($_POST['narocilo-submit'])) {
  error_reporting(0);
  require 'dbh.inc.php';

  $idTaco = $_POST['narocilo-submit'];

  $max = "SELECT idKosarica from kosarica ORDER BY idKosarica DESC LIMIT 1";
  $result = mysqli_query($conn, $max);

for ($x = 1; $x <= $row['idKosarica']; $x++){

  $sql = "INSERT INTO narocila (nameNarocilo, priceNarocilo, nameNarocnik)
          select nameTaco, priceTaco, ?
          from taco
          WHERE idTaco = ?;";

   $stmt = mysqli_prepare($conn, $sql ) ;
   mysqli_stmt_bind_param($stmt, "si",$_SESSION['uid'], $idTaco);
   mysqli_stmt_execute($stmt);
}

   header("Location: ../index.php?order=success");


}
?>
