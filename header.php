<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <div>
      <form action="Includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/Email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name ="login-submit">Login</button>
      </form>
      <a href = "registration.php">Signup</a>
      <form action ="Includes/logout.inc.php" method="post">
        <button type ="submit" name="logout-submit">Logout</button>
      </form>
    </div>
   </nav>
<header>

<div class="header">
  <h1>El Picante</h1>
</div>
