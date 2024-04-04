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
//Loop

//While Loop
//Do while Loop
//For Loop
//Foreach Loop
$x = 1;
while ($x <= 5) {
    echo "hi there<br>";
    $x++;
}
?>
<br>
<?php
//Loop

//While Loop
//Do while Loop
//For Loop
//Foreach Loop
$x = 1;
do {
    echo "hi there<br>";
    $x++;
}
while ($x <= 5);

?>
<br>
<?php
//Loop

//While Loop
//Do while Loop
//For Loop
//Foreach Loop

    for($x = 1; $x <= 10; $x++) {
        echo "hi<br>";
    }
?>
<br>
<?php
    //Loop

    //While Loop
    //Do While Loop
    //For Loop
    //Foreach Loop

    $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    foreach ($array as $loopdata) {
        echo "My nanme is ".$loopdata. "<br>";

    }
?>
</body>