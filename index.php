<?php

	require_once 'config/conexion.php';
	require_once 'templates/header.php';

	if (isset($_POST['login'])) {
		$email = trim($_POST['email']);
		$password = $_POST['password'];
	}

?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/seguridad.jpg);">
					<span class="login100-form-title-1">
						Iniciar Sesión
					</span>
				</div>

				<form class="login100-form validate-form" action="index.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Correo</span>
						<input class="input100" type="email" name="email" placeholder="Ingresa tú usuario...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Ingresa tú contraseña...">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="#" class="txt1">
								¿Olvidaste tu contraseña?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input value="Ingresar" name="login" type="submit" class="login100-form-btn mr-2" />
						<a href="registro.php" class="login100-form-btn">Registrarme</a>
					</div>
				</form>

				<?php 
					require_once 'validar_login.php';
				?>

			</div>
		</div>
	</div>
	
<?php
	require_once 'templates/footer.php';
?>