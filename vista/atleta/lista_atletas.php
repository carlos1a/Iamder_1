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
  	<h2>Lista de atletas registrados</h2>
  		<hr>
			<?php
				require ("../../controlador/atleta/con_listar_atletas.php");
			?>
	</body>
</html>