<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO!!</h1>
<?php
session_start();
if(isset($_SESSION['inicion_sesion']) || $_SESSION['inicio_sesion'] != true){
    session_unset();
    session_destroy();
    header('location: index.php');
    exit();
}
require_once("conect.php");
?>


<img src="./img/imagenUno.jpg" alt="" width="300px">
<button><a href="index.php">Cerrar sesion</a></button>

</body>
</html>