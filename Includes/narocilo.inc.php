<?php

if (isset($_POST['narocilo-submit'])) {
  error_reporting(0);
  require 'dbh.inc.php';

  $idTaco = $_POST['narocilo-submit'];

  $sql = "INSERT INTO narocila (nameNarocilo, priceNarocilo)
          SELECT nameTaco, priceTaco FROM taco
          WHERE idTaco = $idTaco";
  $result = mysqli_query($conn, $sql);

  header("Location: ../index.php?order=success");


}


 ?>
