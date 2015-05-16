<?php
//require ("../session.php");
 ?><!DOCTYPE html>
<html lang="en">
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
	#container{

		width: 50%;
	}
</style>

</head>

<body>
	<div id="container">
<form method="post" action="../../controlador/noticia/con_registrar_noticia.php" enctype="multipart/form-data">
	<input type="hidden" name ="autor" value="judiel">

	<div><label>Título</label><input type="text" name ="titulo" required ></div>

	<div ><label >Cuerpo</label>
    <textarea id="cuerpo" name ="cuerpo" ></textarea></div>
    <div><label >Imagen</label><input type="file" name="img"></div>
    <div><input type="submit" value="enviar"><input type="reset" name ="limpiar"></div>
</form>
</div>
</body>
</html>