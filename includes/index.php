<?php
  include_once 'includes/dbh.inc.php';
  require "header.php";
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
    <?php
    include 'includes/header.php';
?>
<?php
    
    echo str_replace("Amy", "Claudia", "Hi Amy");

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $reslutCheck = mysqli_num_rows($conn, $sql);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_UID'];
      }
    }

?>
  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          else{
            echo '<p class="login-status">You are logged out!</p>';
          }


        ?>
        <p class="login-system">You are logged out!</p>
        <p class="login-status">You are logged in!</p>
      </section>
    </div>
  </main>

<?php
  require "footer.php";
?>

</html>