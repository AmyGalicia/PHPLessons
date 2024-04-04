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
<?php
    
 $x = 1;  
 
 if ($x == 1) {
    echo "Daniel is very Handsome!";
 } 
 elseif($x == 2) {
    echo "Daniel is kinda handsome!";
 }
 elseif($x == 3) {
    echo "Daniel is kinda handsome!";
 }
 elseif($x == 4) {
    echo "Daniel is kinda handsome!";
 }
 else {
    echo "Daniel is very Ugly!";
 }

?>

<?php

$x = 7;

switch ($x) {
    case 1:
        echo "The answer is 1";
    break;
    case 2:
        echo "The answer is 2";
    break;
    case 3:
        echo "The answer is 3";
    break;
    case 4:
        echo "The answer is 4";
    break;
    default:
        echo "There is no answer";
}

?>

</body>
</html>
