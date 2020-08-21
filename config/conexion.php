<?php   

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = "empresarial_login";

    $conexion = mysqli_connect($host, $username, $password, $database);

    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
?>