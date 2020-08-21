<?php 

    $errores = array();

    if (isset($_POST['submit'])) {

        $nombre = mysqli_real_escape_string($conexion, trim($nombre));
		$pattern = '/^[a-zA-Z, ]*$/';

        if (empty($nombre)){
            $errores[] = '<div class="alert alert-danger">Agrega tu nombre</div>';
        } else if (strlen($nombre) < 4) {
            $errores[] = '<div class="alert alert-danger">El nombre es demasiado corto</div>';
        } else if (strlen($nombre) > 20) {
            $errores[] = '<div class="alert alert-danger">El nombre es demasiado largo</div>';
        } else if (is_numeric($nombre)) {
            $errores[] = '<div class="alert alert-danger">El nombre no debe incluír números</div>';
        } else if(!preg_match($pattern, $nombre)) {
            $errores[] = '<div class="alert alert-danger">El nombre debe contener solamente letras</div>';
        }

        $apellidos = mysqli_real_escape_string($conexion, trim($apellidos));

        if (empty($apellidos)){
            $errores[] = '<div class="alert alert-danger">Agrega tus apellidos</div>';
        } else if (strlen($apellidos) < 4) {
            $errores[] = '<div class="alert alert-danger">Los apellidos son demasiado cortos</div>';
        } else if (strlen($apellidos) > 40) {
            $errores[] = '<div class="alert alert-danger">Los apellidos son demasiado largos</div>';
        } else if (is_numeric($apellidos)) {
            $errores[] = '<div class="alert alert-danger">Los apellidos no deben incluír números</div>';
        } else if(!preg_match($pattern, $apellidos)) {
            $errores[] = '<div class="alert alert-danger">Los apellidos deben contener solamente letras</div>';
        }

        $telefono = mysqli_real_escape_string($conexion, trim($telefono));

		if(empty($telefono)){
			$errores[] = '<div class="alert alert-danger" role="alert">Agrega tu teléfono</div>';
		}else if(!is_numeric($telefono)) {
			$errores[] ='<div class="alert alert-danger" role="alert">El teléfono debe ser un número</div>';
        }
        
        $email = mysqli_real_escape_string($conexion, trim($email));

		if(empty($email)){
			$errores[] = '<div class="alert alert-danger" role="alert">Agrega tu email</div>';
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errores[] = '<div class="alert alert-danger" role="alert">Está dirección de correo no es válida</div>';
        }

        $pass = mysqli_real_escape_string($conexion, $pass);
        
        if(empty($pass)){
            $errores[] = '<div class="alert alert-danger" role="alert">Agrega tu Contraseña</div>';
        }else if(strlen($pass) < 6){
                $errores[] = '<div class="alert alert-danger" role="alert">La Contraseña debe tener al menos 6 caracteres</div>';
        }else if(strlen($pass) > 16){
                $errores[] = '<div class="alert alert-danger" role="alert">La contraseña no puede tener más de 16 caracteres</div>';
        }else if (!preg_match('`[a-z]`', $pass)){
                $errores[] = '<div class="alert alert-danger" role="alert">La contraseña debe tener al menos una letra minúscula</div>';
        }else if (!preg_match('`[A-Z]`', $pass)){
                $errores[] = '<div class="alert alert-danger" role="alert">La contraseña debe tener al menos una letra mayúscula</div>';
        }else if (!preg_match('`[0-9]`', $pass)){
                $errores[] = '<div class="alert alert-danger" role="alert">La contraseña debe tener al menos un caracter numérico</div>';
        }

        $pass2 = mysqli_real_escape_string($conexion, $pass2);

        if(empty($pass2)){
            $errores[] = '<div class="alert alert-danger" role="alert">Confirma tu Contraseña</div>';
        }else if($pass2 != $pass){
            $errores[] = '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden</div>';
        }

        if (count($errores) > 0) {
            foreach ($errores as $error) {
                echo $error;
            }
        } else if (count($errores) == 0) {
            // Cifrar la contraseña
            $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);

            // Insertar el cliente/usuario en la base de datos
            $sql = "INSERT INTO cliente VALUES(null, '$nombre', '$apellidos', '$telefono', '$email', '$password_segura', 'cliente');";
            $guardar = mysqli_query($conexion, $sql);

            if ($guardar) {
                header('Location: index.php');
            }
            
        }

    }
?>