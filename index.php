<?php
  require 'header.php';
  error_reporting(0);
?>

<main>
<?php

  if(isset($_GET["order"])){
    if($_GET["order"] == "success"){
      echo '<p class = "signupsuccess"><b>TAKO DODAN V KOŠARICO!</b></p>';
      echo "<br>";
    }
    elseif ($_GET["order"] == "successful") {
      echo '<p class = "signupsuccess"><b>NAROČILO ODDANO</b></p>';
      echo "<br>";
    }
    else {
      echo '<p class = "signuperror"><b>NAROČILO NI BILO SPREJETO! :(</b></p>';
      echo "<br>";
    }
  }

  if (isset($_SESSION['uid'])) {

    echo '<h1>Naroči svoj tako!</h1>';
    echo "<br><br>";

    $sql = "SELECT * FROM taco ORDER BY idTaco ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

      echo '<table>';
      echo "<td><b>ID</b></td><td><b>NAME</b></td><td><b>PRICE</b></td><td><b>DESCRIPTION</b></td>";

      while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>".$row["idTaco"]."</td><td>".$row["nameTaco"]."</td><td>".$row["priceTaco"]." €</td><td>".$row["descTaco"]."</td>";
        ?> <!--<td><a href = 'Includes/dodajVKosarico.inc.php?idTaco=<?php //echo $row["idTaco"]?>'>Izberi</a></td> -->
    <td>
      <form action="Includes/dodajVKosarico.inc.php" method="get">
        <input type="hidden" name="idTaco" value="<?php echo $row["idTaco"] ?>"/>
        <select name="kolicina">
          <option value="0"></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <button type="submit" name="submit" class = "dodaj">Dodaj</button>
        </form>
    </td>

    <!-- <td><a href = 'Includes/dodajVKosarico.inc.php?idTaco=<?php //echo $row["idTaco"]?>&kolicina='>Izberi</a></td> -->

      </tr>
<?php
      }
      echo "<tr>";

      echo "</tr>";
      echo "</table>";

    }

    else {
      echo "Trenutno smo zaprti :(";
    }

  }
  else {
    echo '<p class="login-status">Please Login</p>';
  }
?>

</main>

<?php
  require 'footer.php';
?>
