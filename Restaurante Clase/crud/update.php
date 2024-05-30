<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']?>">
    <input type="text" name="nombre" placeholder="Nombres" value="<?= $row['nombre']?>">
    <select name="rol" value="<?= $row['rol']?>">
                             <option value="">Seleccione el rol</option>
                            <option value="chef">Chef</option>
                            <option value="cliente">Cliente</option>
                            <option value="mesero">Mesero</option>

    <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
    <input type="text" name="correo" placeholder="Correo" value="<?= $row['correo']?>">


                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>