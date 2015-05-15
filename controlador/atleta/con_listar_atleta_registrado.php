<?php 
require ("../../modelo/mod_connex.php");
$conexion= new connex();
$pgconn= $conexion->conectar();
                               
require("../../modelo/mod_atleta.php");
 $consulta= new atleta();
 $listar=$consulta-> mostrar ($pgconn);
    if(pg_num_rows($listar)>0){
                                                                              
?>
                                                                       
<table border="1" align="center" id="lista_atleta_registrado" >
<thead >
  <tr>
  <th align="center">Nombre</th>
  <th align="center">Apellido</th>
  <th align="center">Cédula</th>
  <th align="center">Sexo</th>
 </tr>
 </thead>
 <?php
 for($i=0; $i<pg_num_rows($listar); $i++){
 $row= pg_fetch_array($listar, $i, PGSQL_ASSOC);
 $atl_nom=$row["atl_nom"];
 $atl_ape=$row["atl_ape"];
 $atl_ced=$row["atl_ced"]; 
 $atl_sex=$row["atl_sex"];
 ?>
 <tr>
 <td align="center"><?php echo $atl_nom;?>
 <td align="center"><?php echo $atl_ape;?>
 <td align="center"><?php echo $atl_ced;?>
 <td align="center"><?php echo $atl_sex;?>
 <?php }?>
</table>
 <?php }?>