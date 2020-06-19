<?php
$connection = mysqli_connect('localhost','root','','ecomphp');
if(!$connection){
    echo "Error: Unable to connect to Mysql." . PHP_EOL;
    echo "Debugging Error: " . mysqli_connect_error() . PHP_EOL;
    echo "Debugging Error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} 
?>