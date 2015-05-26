<?php
	require ("../../controlador/con_session.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Empleado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
<form action="../../controlador/empleado/con_registrar_cedula_empleado.php" method="POST">
<div class="form-group">
	<h4>Ingrese la cédula del empleado a registrar</h4>
	<table>	
	<label for="text">Cédula</label>
	<tr>
	<td><input name="emp_ced" type="text" class="form-control" placeholder="123456" title="Ingrese cédula del empleado" pattern="^[0-9]{6,8}$" required>
	<td><input name="Buscar" class="btn btn-lg btn-primary btn-block" type="submit" value="Buscar">
	</tr>
	</table>
</div>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>