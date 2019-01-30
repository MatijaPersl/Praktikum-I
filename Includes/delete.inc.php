<?php

require 'dbh.inc.php';

$idNarocilo = $_GET['idTaco'];

$sql = "DELETE FROM narocila WHERE idNarocilo = $idNarocilo";
$result = mysqli_query($conn, $sql);

header("Location: ../pregledNarocil.php?order=delete");

?>
