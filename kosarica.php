<?php
  require 'header.php';

echo '<h1>Košarica</h1>';
echo "<br><br>";

$sql = "SELECT nameKosarica, priceKosarica, nameNarocnik FROM kosarica ORDER BY idKosarica DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<form action = '' method = 'POST' class = 'tabela'>";
  echo '<table>';
  echo "<td><b>NAME</b></td><td><b>PRICE</b></td><td><b>NAROČNIK</b></td>";
  echo "<tr></tr><tr></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr></tr>";
    echo "<tr>";
    echo "<td>".$row["nameKosarica"]."</td><td>".$row["priceKosarica"]."</td><td>".$row["nameNarocnik"]."</td>";
    ?><td><a href = 'Includes/delete.inc.php?idKosarica=<?php echo $row["idKosarica"]?>'>Izbrši</a></td><?php 
    echo "</tr>";

  }

  echo "</table>";
  echo "<button type = 'submit'>Potrdi</button>";
  echo "</form>";
}
