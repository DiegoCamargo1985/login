<?php
require_once("conect.php");

session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $Identificacion = $_POST['Identificacion'];
    $Password = $_POST['Password'];

$sqlSelected = "SELECT Identificacion, Contrasena FROM users where Identificacion = 74085046";
$result = $conn->query($sqlSelected);

if($result ->num_rows > 0){
    $row = $result->fetch_assoc();
    $ID = $row['Identificacion'];
    $Pass = $row['Contrasena'];

    if($Identificacion === $ID & $Password === $Pass){

$_SESSION['Identificacion'] = $Identificacion;
$_SESSION['inicio_sesion'] = true;

header('location: Inicio.php');
exit();

    }else{
        $mensaje = "<script> alert ('Error de Usuario');  window.history.back();</script>";
    }
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($mensaje)){?>
        <p><?php echo $mensaje ?></p>
        <?php }?>

    <form action="" method="POST">
    <label for="Identificacion">Identificacion</label>
    <input type="text" name="Identificacion" require><br>Password
    <input type="password" name="Password" require><br>
    <input type="submit">

    </form>
</body>
</html>