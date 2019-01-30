<?php
  require 'header.php';
  error_reporting(0);
?>

<main>
  <div class ="wrapper-main">
    <section class="section-default">
      <h1>Signup</h1>
      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyfields") {
            echo '<p class="signuperror">Fill in all field</p>';
          }
          else if ($_GET["error"] == "invaliduidmail") {
            echo '<p class="signuperror">Invalid username or email</p>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<p class="signuperror">Invalid username</p>';
          }
          else if ($_GET["error"] == "invalidmail") {
            echo '<p class="signuperror">Invalid email</p>';
          }
          else if ($_GET["error"] == "passwordcheck") {
            echo '<p class="signuperror">Your passwords do not match</p>';
          }
          else if ($_GET["error"] == "usertaken") {
            echo '<p class="signuperror">username is already taken</p>';
          }
        }
        else if ($_GET["signup"] == "success") {
          echo '<p class="signupsuccess">Signup successful!</p>';
        }
      ?>
      <form class="form-signup" action="Includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="mail" placeholder="Email"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
        <button type ="submit" name ="signup-submit">Signup</button>
      </form>
    </section>
  </div>
</main>



<?php
  require 'footer.php';
?>
