<!--<?php
//require ("../controlador/con_session.php");
?>-->
<!DOCTYPE HTML>
<html>
	<head>
    <link rel="icon" type="image/png" href="../Imagenes/logo.png" sizes="16x16">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    
    <title>Empleado</title>
	</head>
	<body>
	    <h2>Registro de atletas</h2>
    	<hr>
  		<form action="../../controlador/atleta/con_buscar_cedula_atleta.php" method="POST">
    	<h2 align="center">Ingrese c&eacute;dula del atleta a registrar</h2>
    	<p>&nbsp;</p>		
		<table align="center" width="80%" border="1">
 			<tr>
				<td width="810" align="center" scope="col"><div align="right"><input name="atl_ced" type="text" placeholder="123456" title="Ingrese cédula del atleta" pattern="^[0-9]{6,8}$" required></div></td>
				<td width="386" align="left" scope="col"><input name="Buscar" type="submit" value="Buscar"></td>
  			</tr>
		</table>
    	<p>&nbsp;</p>
    	</form>
	</body>
</html>