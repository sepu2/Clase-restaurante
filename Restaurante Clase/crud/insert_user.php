<?php
include("connection.php");
$con = connection();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios VALUES('$id', '$nombre', '$rol', $telefono, '$correo')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>