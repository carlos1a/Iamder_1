<?php
require ("../../controlador/con_session.php");
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Noticias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../bootstrap/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
    selector: "textarea"
 });
	</script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
	#container
	{
		width: 50%;
	}
</style>
</head>
<body>
	<div id="container">
		<form name="form1" method="POST" action="../../controlador/noticia/con_registrar_noticia.php" enctype="multipart/form-data">
			<input type="hidden" name ="autor" value="judiel">
			  <div align="left">
			    <h2 align="center">Rellene el formulario para registrar los datos en el sistema</h2>
			    <p>&nbsp;</p>
			    
			    <div class="form-group"><label>Encabezado:&nbsp;</label>
			    <input type="text" class="form-control" name="encabezado" id="encabezado" placeholder="Encabezado" title="Ingrese encabezado de la noticia" required /></div>
				
				<div class="form-group"><label>Imagen:&nbsp;</label>
				<input type="file" class="form-control" name="img" id="img"/></div>
			    
			    <div class="form-group"><label>Descripción de la noticia:&nbsp;</label>
			    <textarea id="cuerpo" class="form-control" name ="cuerpo" ></textarea></div>
				
				<div class="form-group"><label>Autor:&nbsp;</label>
				<input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" required /></div>
			    
			    <div><input class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" value="Enviar" /></div>
		</form>
	</div>
</body>
</html>