<?php

    if (isset($_POST['login'])) {
        
        $sql = "SELECT * FROM cliente WHERE email = '$email' LIMIT 1";
        $login = mysqli_query($conexion, $sql);

        if ($login && mysqli_num_rows($login) == 1) {

            $usuario = mysqli_fetch_assoc($login);

            $verify = password_verify($password, $usuario['password']);

            if ($verify) {
				echo '<div class="alert alert-success" role="alert">Inicio Exitoso!!</div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">Error al Iniciar Sesión</div>';
            }
        
        }
    }

?>