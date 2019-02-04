<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

// Ustvari povezavo
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Preveri povezavo
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
