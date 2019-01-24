
<?php

require 'header.php';

$idTaco = $_GET['idTaco'];

$sql = "SELECT nameTaco, priceTaco, descTaco FROM taco WHERE idTaco = $idTaco";
$result = mysqli_query($conn, $sql);
echo "<div class='wrapper-main'>";
echo "<br><br>";
echo "<h1>Vaše naročilo</h1>";
echo "<br><br><br><br>";
echo "<table>";
echo "<tr>";
echo "<td><b>NAME</b></td><td><b>PRICE</b></td><td><b>DESCRIPTION</b></td>";
echo "</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo '<td>'.$row['nameTaco']."</td><td>".$row['priceTaco']."</td><td>".$row['descTaco'].'</td>';
    echo "</tr>";
    echo "<tr>";
    echo "</tr>";
    echo "<tr>";
    echo '<td><button type="Submit" value="Submit">Potrdi</button></td><td></td><td></td>';
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>


</div>
