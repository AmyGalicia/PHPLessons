<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
  </head>
 <body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="calculator.php">calculator</a>
        <a class="nav-link" href="calender.php">calender</a>
        <a class="nav-link" href="conditionals.php">conditionals</a>
        <a class="nav-link" href="datatypes.php">datatypes</a>
        <a class="nav-link" href="functions.php">functions</a>
        <a class="nav-link" href="index.php">index</a>
        <a class="nav-link" href="loops.php">loops</a>
        <a class="nav-link" href="operators.php">operators</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
<header>
  <nav>
    <div class="header-login">
      <?php
    if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method ="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
          }
          else{
            echo '<form action="includes/login.inc.php" method ="post">
            <input type="text" name="miluid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">login</button>
          </form>
          <a href="signup.php">Signup</a>';
          }
        ?>
  
      <?php 
$_SESSION['username'] = "amygal29 ";
echo $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
} else{
  echo "You are logged in!";
}

?>

