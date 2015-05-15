<!--<?php
//require ("../controlador/con_session.php");
?>-->
<?php
$cedula = $_GET['atl_ced'];
?>
<!DOCTYPE HTML>
<html>
<html>
  <head>
    <link rel="icon" type="image/png" href="../Imagenes/logo.png" sizes="16x16">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    
    <title>Atleta</title>
  </head>
  <body>
    <h2>Registro de atletas</h2>
    <hr>
    <form id="form2" name="registrar_atleta" method="POST" action="../../controlador/atleta/con_registrar_atleta.php">
    <h2>Rellene el formulario para registrar sus datos en el sistema</h2>
    <p>&nbsp;</p>
    <table width="500" border="1">
      <tr>
        <td width="298" scope="col"><div align="right"><strong>C&eacute;dula:&nbsp;</strong></div></td>
        <td width="466" scope="col"><input type="text" name="cedula" id="cedula" readonly="true" value="<?php echo $cedula; ?>" title="Ingrese cédula del atleta" pattern="^[0-9]{6,8}$" required/></td>
      </tr>
      <tr>
        <td width="298" scope="col"><div align="right"><strong>Nombre:&nbsp;</strong></div></td>
        <td width="466" scope="col"><input type="text" name="nombre" id="nombre" placeholder="Nombre" title="Ingrese nombre del atleta" required /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Apellido:&nbsp;</strong></div></td>
        <td><input type="text" name="apellido" id="apellido" placeholder="Apellido" title="Ingrese apellido del atleta" required /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Tel&eacute;fono:&nbsp;</strong></div></td>
        <td><input type="text" name="telefono" id="telefono" placeholder="2127813002" title="Ingrese un número telefónico" pattern="^[0-9]{7,10}$" required/></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Fecha de nacimiento:&nbsp;</strong></td>
        <td><input type="date" name="fechanacimiento" id="fechanacimiento"/></td>
      </tr>  
      <tr>
        <td><div align="right"><strong>Dirección:&nbsp;</strong></div></td>
        <td><input type="text" name="direccion" id="direccion" placeholder="Gran avenida..." title="Ingrese dirección del atleta" required/></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Estátura:&nbsp;</strong></div></td>
        <td><input type="text" name="estatura" id="estatura" placeholder="1,70 M " title="Ingrese estátura del atleta" required/></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Peso:&nbsp;</strong></div></td>
        <td><input type="text" name="peso" id="peso" placeholder="80 Kg" title="Ingrese peso del atleta" required/></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Fecha de registro:&nbsp;</strong></div></td>
        <td><input type="text" name="fechacreacion" id="fechacreacion" value="<?php echo date('Y-m-d'); ?>" readonly="true"/></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Disciplina:&nbsp;</strong></div></td>
        <td><select name="disciplina" id="disciplina" required>
          <option value="">Seleccione</option>
          <option value="1">B&eacute;isbol</option>
          <option value="2">F&uacute;tbol</option>
          <option value="3">Softball</option>
          <option value="4">Baloncesto</option>
          <option value="5">Tenis de mesa</option>
         </select></td>
      </tr>
      <tr>      
      <tr>
        <td colspan="4" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" />
      </tr>
    </table>
    <p>&nbsp;</p>
    </form>
  </body>
</html>