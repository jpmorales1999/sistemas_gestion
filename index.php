<?php
	require_once 'templates/header.php';
?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/seguridad.jpg);">
					<span class="login100-form-title-1">
						Iniciar Sesión
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Ingresa tú usuario...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Ingresa tú contraseña...">
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
						<button class="login100-form-btn mr-2">
							Ingresar
						</button>
						<a href="registro.php" class="login100-form-btn">Registrarme</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
<?php
	require_once 'templates/footer.php';
?>