<?php

require 'header.php';
error_reporting(0);

$idTaco = $_GET['idTaco'];

$sql = "SELECT nameTaco, priceTaco, descTaco FROM taco WHERE idTaco = $idTaco";
$result = mysqli_query($conn, $sql);

echo "<br><br>";
echo "<h1>Vaše naročilo</h1>";
echo "<br><br>";

echo '<table class = "wrapper-main">';
echo "<tr>";
echo "<td><b> NAME </b></td>&nbsp<td><b> PRICE </b></td>&nbsp<td><b> DESCRIPTION </b></td>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "</tr>";
    echo "<tr>";
    echo '<td>'.$row['nameTaco']."</td><td>".$row['priceTaco']."</td><td>".$row['descTaco'].'</td>';
    echo "</tr>";
    echo "<tr></tr><tr></tr>";
    echo "<tr>";
    echo '<form action = "Includes\order.inc.php" method="post">';
      echo '<td><button type="submit" value="'.$idTaco.'" name="narocilo-submit">Potrdi</button></td><td></td><td></td>';
    echo "</form>";
    echo "</tr>";
    }

echo "</table>";
echo "</form>";
echo "<br>";

?>


</div>
<?php
require 'footer.php';
?>
