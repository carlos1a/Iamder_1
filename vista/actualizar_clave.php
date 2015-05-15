<!--<?php
//require ("../controlador/con_session.php");
?>-->
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" type="image/png" href="../Imagenes/logo.png" sizes="16x16">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    
    <title>Atleta</title>
  </head>
<body>
	<h2>Actualizar clave</h2>
	<hr>			
	<h3> <strong>Ingrese los siguientes datos:</strong></h3>
<?php
	$emp_login=$_SESSION['emp_log'];
	if($_SESSION['tipemp_cod']=='1') 
	{ 
?>
   	<form method="post" action="../controlador/con_actualizar_clave.php" >
		<table align="center"border="2">
			<tr>
				<td align="right"><strong>&nbsp;</strong>
			</tr>
			<tr>
				<td><input  type="hidden" name="login" id="login" placeholder=<?php echo $emp_login;?> value="<?php echo $emp_login;?>"></td>
			</tr>
			<tr>
				<td align="right"><strong>Contraseña:&nbsp;</strong></td>
				<td><input type="password" name="clave" id="clave" placeholder="******" title="Debe tener letras y números" pattern="^[a-zA-Z0-9]{4,10}$" required></td>
			</tr>
			<tr>
				<td align="right"><strong>Confirmar Contraseña:&nbsp;</strong></td>
				<td><input type="password" name="conficlave" id="conficlave" placeholder="******" title="Debe tener letras y números" pattern="^[a-zA-Z0-9]{4,10}$" required></td>
			</tr>
			<tr>
				<td colspan="2" heigth="5">&nbsp;</td>
			<tr>
				<td id="boton" align="center">&nbsp;</td>
				<td id="boton" align="center">
				<div align="center"><input name="submit" type="submit" value="Enviar"></div>
				</td>
			</tr>
		</table>
	</form>
<?php 
	} 
?>
</body>
</html>