<?php
  require 'header.php';
?>


<main>
<?php
  if (isset($_SESSION['uid'])) {
    echo '<p class="login-status">you are logged in</p>';
  }
  else {
    echo '<p class="login-status">you are logged out</p>';
  }
?>



</main>


<?php
  require 'footer.php';
// ctrl alt b  = {}, ctrl alt f = []
?>
