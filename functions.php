<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php
    
    echo str_replace("Amy", "Claudia", "Hi Amy");

?>
<br>
<?php

$x = 100;

function newCalc($x) {
    $newnr = $x * 0.75;
    echo "Here is 75% of what you wrote: ".$newnr;
}

$x = 100;
newCalc($x);
echo "<br>";
$a = 10;
newCalc($a);

?>
</body>
</html>
