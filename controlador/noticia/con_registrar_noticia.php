<?php
require("../../modelo/mod_connex.php");
$conexion= new connex();
$pgconn= $conexion->conectar();

$not_des= $_POST['cuerpo'];
$not_aut=$_POST['autor'];
$not_enc=$_POST['titulo'];
$fecha=date("Y-m-d h:i:sa");
require("../../modelo/mod_noticia.php");

$img_ruta="../../vista/noticia/imagenes/".$_FILES['img']['name'];

move_uploaded_file($imagen, $img_ruta);

$noticia= new noticia();
$inserto=$noticia->agregar($not_enc,$img_ruta, $not_des,$not_aut,$fecha,$emp_cod,$pgconn);
if ($inserto==true){
$imagen=$_FILES['img']['tmp_name'];
move_uploaded_file($imagen, $img_ruta);

}
 ?>