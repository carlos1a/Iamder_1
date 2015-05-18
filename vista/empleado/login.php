<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

<style>

body {
  padding-top: 40px;
  padding-bottom: 40px;

}

.login {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;

}

#sha{
	max-width: 340px;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    border-radius: 6%;
  }
 #avatar{
width: 96px;
height: 96px;
margin: 0px auto 10px;
display: block;
border-radius: 50%;
 }

</style>


</head>
<body>

	<div class="container well" id="sha">
		<div class="row">
					<div class="col-xs-12">
						<img src="../CSS/imagenes/images.jpg" class="img-responsive" id="avatar">
					</div>
		</div>

		<form class="login" action="../../controlador/empleado/con_login.php" method="POST">

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Ingrese su número de cédula" name="cedula" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

				<div class="checkbox">
				<label class="checkbox">
				<input type="checkbox" value="1" name="remember"> No cerrar sesión
				</label>
				       <p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
				       <p class="help-block" >¿Eres nuevo usuario?<a href="vis_registrar_empleado.php"> ¡Registrate!</a></p>
				</div>

	    </form>
	</div>
</body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</html>