<?php

$server = "localhost";
$username = "lukesf";
$password = "Kr@kEN-12.10.2020";
$database = "lukesf";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('Připojení selhalo')</script>"); 
        
}


?>




