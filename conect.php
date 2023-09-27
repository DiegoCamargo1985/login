<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "login";

$conn = new mysqli($servername, $username, $password, $bdname);

if($conn->connect_error){
    die("error de conexion: " .$conn->connect_error);
}else{
   echo("conexion exitosa"); 
}

?>