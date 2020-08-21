<?php 
    require_once 'config/conexion.php';
    require_once 'templates/header.php';

    if (isset($_POST['submit'])) {
        
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass2 = $_POST['confirm_pass'];
        
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <title>Formario de Registro</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2>Formulario de Registro</h2>
        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingresa tú nombre...">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Ingresa tus apellidos...">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" class="form-control" placeholder="Número de teléfono...">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" placeholder="Ingresa tú correo...">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingresa tú contraseña...">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar Contraseña</label>
                <input type="password" name="confirm_pass" class="form-control" placeholder="Ingresa tú contraseña...">
            </div>
            <div class="clearfix"></div>
            <input type="submit" name="submit" class="btn btn-info btn-lg btn-responsive" value="Registrar">
            <p class="mb-4"><a href="index.html" class="btn btn-info btn-lg btn-responsive">Volver</a><p>
        </form>

            <?php 
                require_once 'validar_registro.php';
            ?>  

    </div>

<?php
    require_once 'templates/footer.php';
?>