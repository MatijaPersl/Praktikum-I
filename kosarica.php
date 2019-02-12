<?php
  require 'header.php';

  if(isset($_GET["order"])){
    if($_GET["order"] == "delete"){
      echo '<p class = "signuperror"><b>Izdelek je bil izbrisan!</b></p>';
      echo "<br>";
    }
  }
echo "<br><br>";
echo '<h1>Košarica</h1>';
echo "<br><br>";

$id = $_SESSION['uid'];

$sql = "SELECT * FROM kosarica WHERE nameNarocnika = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<form action='Includes/narocilo.inc.php' method='post'>";
  echo '<table>';
  echo "<td><b>ID</b></td><td><b>NAME</b></td><td><b>PRICE</b></td>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["idKosarica"]."</td><td>".$row["nameKosarica"]."</td><td>".$row["priceKosarica"]."</td>";
    ?><td><a href = 'Includes/delete.inc.php?idKosarica=<?php echo $row["idKosarica"]?>'>Izbrši</a></td><?php
    echo "</tr>";
  }
  echo "<tr>";
  echo "<td><button type = 'submit' class= 'potrdi2'>Potrdi</button></td>";
  echo "<tr>";

  echo "</table>";
  echo "</form>";

}
else {
  echo '<p class = "signuperror"><b>Košarica je prazna!</b></p>';
}
