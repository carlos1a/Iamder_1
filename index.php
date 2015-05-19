<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Iamder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vista/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/prefixfree.min.js"></script>
</head>

<body>

	 <form action="controlador/empleado/con_login.php" method="post" autocomplete="off">
	  <div class="body"></div>
			<div class="grad"></div>
			<div class="header">
				<div><span>Iamder</span></div>
			</div>
			<br>
			<div class="login" >
					<input type="text" placeholder="Ingrese tu Cédula" name="cedula" required><br>
					<input type="password" placeholder="Ingresa tu Clave" name="clave" required><br>

					<br><button class="btn btn-lg btn-primary btn-block" type="submit">Inicia sesión</button><br>
					 <p align="center"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
					 <p align="center">¿Eres nuevo usuario?<a href="vista/empleado/vis_registrar_empleado.php"> ¡Registrate!</a></p>
			</div>
	</form>
</body>

</html>