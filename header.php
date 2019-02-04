<?php
  session_start();
  error_reporting(0);
  require "Includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <header>
      <nav class="nav-header-main">

        <ul>
          <li><a href="index.php">Domov</a></li>
          <?php if ($_SESSION['uid'] == 'admin') { ?>
            <li><a href="pregledNarocil.php">Naročila</a></li>
          <?php  } ?>

        </ul>
      </nav>
      <div class="header-login">
        <?php
        if (!isset($_SESSION['uid'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else  {

          echo '<form action="includes/logout.inc.php" method="post">
            Živjo, '.$_SESSION["uid"].'&nbsp
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
