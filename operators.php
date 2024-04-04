<?php
    include 'includes/header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php
    
    //Arithmetic Operators
    echo 5+5;

?>

<?php

//Assignment Operators
$x = 100;
$x +=20;

?>

<?php

//Comparison Operators 
$x = 10;
$y = 10;

if ($x >= $y) {
    echo "True!";
}
else {
    echo "False!";
}

?>

<?php

//Increment/Decrement Operators
$x =10;
echo $x--;
echo $x;

?>

<?php

//Logical Operators
$x =10;
$y =20;

if ($x == $y || 1 == 1) {
    echo "True";
}
?>
</body>
</html>