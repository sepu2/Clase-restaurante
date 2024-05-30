<?php

include("connection.php");
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql="UPDATE usuarios SET nombre='$nombre', rol='$rol', telefono='$telefono', correo='$correo' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>