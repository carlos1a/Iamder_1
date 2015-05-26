<?php
    require ("../../controlador/con_session.php");
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
    <link rel="icon" type="image/png" href="../Imagenes/logo.png" sizes="16x16">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <title>Atleta</title>
	</head>
	<body>
    <div class="container">
	    <h2>Registro de atletas</h2>
    	<hr>
  		<form action="../../controlador/atleta/con_buscar_cedula_atleta.php" method="POST">
    	<h4>Ingrese cédula del atleta a registrar</h4>
        <table>
        <label for="text">Cédula</label>		
 			<tr>
				<td><input name="atl_ced" type="text" class="form-control" placeholder="123456" title="Ingrese cédula del atleta" pattern="^[0-9]{6,8}$" required></div></td>
				<td><input name="Buscar" type="submit" class="btn btn-lg btn-primary btn-block" value="Buscar"></td>
  			</tr>
		</table>
    	<p>&nbsp;</p>
    	</form>
    </div>
	</body>
</html>