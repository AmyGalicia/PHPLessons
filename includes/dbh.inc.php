<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phplessons";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword,$dBPassword);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    
}