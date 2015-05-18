<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario - Login</title>

<?php
require("../css/css.php");
 ?>

</head>
<body>


	<div class="container well" id="sha">
		<div class="row">
					<div class="col-xs-12">
						<img src= "../css/imagenes/images.jpg" class="img-responsive" id="avatar">
					</div>
		</div>

		<form class="login" action="controlador.php" method="POST">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="email" required autofocus>
				</div>


				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
				</div>


				<button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesión</button>

				<div class="checkbox">

					<label class="checkbox">
				        <input type="checkbox" value="1" name="remember"> No cerrar sesión
				    </label>
				       <p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
				</div>

	    </form>



	</div>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>