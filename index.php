<?php
  require 'header.php';
?>


<main>
<?php
  if (isset($_SESSION['uid'])) {

    echo '<h1>Naroci svoj taco!</h1>';
    echo "<br><br>";

    $sql = "SELECT * FROM taco ORDER BY idTaco ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo '<table class = "wrapper-main">';
      echo "<td><b>NAME</b></td><td><b>PRICE</b></td><td><b>DESCRIPTION</b></td>";
      echo "<tr></tr><tr></tr>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr></tr>";
        echo "<tr>";
        echo "</td><td>".$row["nameTaco"]."</td><td>".$row["priceTaco"]."</td><td>".$row["descTaco"]."</td><td><a href = 'addtocart.php'>Izberi</a></td>";
        echo "</tr>";

      }
      echo "</table>";

    }

    else {
      echo "Trenutno smo zaprti :(";
    }

  }
  else {
    echo '<p class="login-status">
      Please Login
    </p>';
  }
?>


</main>


<?php
  require 'footer.php';
// ctrl alt b  = {}, ctrl alt f = []
?>
