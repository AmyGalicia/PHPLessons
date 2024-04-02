<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
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