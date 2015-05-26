<?php
require ("../../controlador/con_session.php");
require("../css/css.php");
$cedula = $_GET['atl_ced'];
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
    <header>
      <h2>Registro de atletas</h2>
    </header>
    <hr>
    <form class="" id="form2" name="registrar_atleta" method="POST" action="../../controlador/atleta/con_registrar_atleta.php">
    <h2>Rellene el formulario para registrar sus datos en el sistema</h2>
    <p>&nbsp;</p>
        <div class="form-group">
        <label>Cédula o Número de partida de nacimiento:</label>
        <input type="text" class="form-control" name="cedula" id="cedula" readonly="true" value="<?php echo $cedula; ?>" title="Ingrese cédula del atleta" pattern="^[0-9]{6,8}$" required/>
        </div>

        <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" title="Ingrese nombre del atleta" required autofocus />
        </div>

        <div class="form-group">
        <label>Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" title="Ingrese apellido del atleta" required />
        </div>

        <div class="form-group">
        <label>Teléfono:</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="2127813002" title="Ingrese un número telefónico" pattern="^[0-9]{7,10}$" required/>
        </div>
        
        <div class="form-group">
        <label> Sexo:&nbsp;</label>
          <select class="form-control" name="sexo" id="sexo" required>
          <option selected="Seleccione" value="">Seleccione</option>
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
         </select>
         </div>

        <div class="form-group">
        <label>Fecha de nacimiento:&nbsp;</label>
        <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" required/>
        </div>

        <div class="form-group">
        <label>Dirección:&nbsp;</label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Gran avenida..." title="Ingrese dirección del atleta" required/>
        </div>
      <!-- --REPRESENTANTE--
      <tr>
        <td width="298" scope="col"><div align="right"><strong>C&eacute;dula del representante:&nbsp;</strong></div></td>
        <td width="466" scope="col"><input type="text" name="cedularep" id="cedularep" placeholder="8383454" title="Ingrese cédula del representante" pattern="^[0-9]{6,8}$" /></td>
      </tr>
      <tr>
        <td width="298" scope="col"><div align="right"><strong>Nombre del representante:&nbsp;</strong></div></td>
        <td width="466" scope="col"><input type="text" name="nombrerep" id="nombrerep" placeholder="Nombre" title="Ingrese nombre del representante" required /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Apellido del representante:&nbsp;</strong></div></td>
        <td><input type="text" name="apellidorep" id="apellidorep" placeholder="Apellido" title="Ingrese apellido del representante" required /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Parentesco del representante:&nbsp;</strong></div></td>
        <td><input type="text" name="parentescorep" id="parentescorep" placeholder="Abuel@, T&iacute;@, Padre, Madre" title="Ingrese parentesco del representante" required /></td>
      </tr>-->
        <div class="form-group">
        <label>Estátura:</label>
        <input type="text" class="form-control" name="estatura" id="estatura" placeholder="1,70 M " title="Ingrese estátura del atleta"/></td>
        </div>

        <div class="form-group">
        <label>Peso:</label>
        <input type="text" class="form-control" name="peso" id="peso" placeholder="80 Kg" title="Ingrese peso del atleta" />
        </div>

        <div class="form-group">
        <label> Talla de camisa:</label>
          <select class="form-control" name="tallacamisa" id="tallacamisa">
          <option selected="Seleccione" value="">Seleccione</option>
          <option value="14">14</option>
          <option value="16">16</option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
         </select></td>
        </div>

        <div class="form-group">
        <label> Talla de Pantalon:</label>
          <select class="form-control" name="tallapantalon" id="tallapantalon">
          <option selected="Seleccione" value="">Seleccione</option>
          <option value="12">12</option>
          <option value="14">14</option>
          <option value="16">16</option>
          <option value="18">18</option>
          <option value="30">30</option>
          <option value="32">32</option>
          <option value="34">34</option>
          <option value="36">36</option>
          <option value="38">38</option>
         </select></td>
        </div>

        <div class="form-group">
        <label>Beca:</label>
        <select class="form-control" name="beca" id="beca" required>
          <option selected="Seleccione" value="">Seleccione</option>
          <option value="Activa">Activa</option>
          <option value="Inactiva">Inactiva</option>
         </select>
        </div>

        <div class="form-group">
        <label>Fecha de registro:&nbsp;</label>
        <input type="text" class="form-control" name="fechacreacion" id="fechacreacion" value="<?php echo date('Y-m-d'); ?>" readonly="true"/>
        </div>

        <div class="form-group">
        <label>Disciplina:</label>
          <select class="form-control" name="disciplina" id="disciplina" required>
          <option selected="Seleccione" value="">Seleccione</option>
          <option value="1">Fútbol</option>
          <option value="2">Béisbol</option>
          <option value="3">Softball</option>
          <option value="4">Baloncesto</option>
          <option value="5">Tenis de mesa</option>
         </select>
          <br>
          <input type="submit" class="btn btn-lg btn-primary btn-block" name="enviar" id="enviar" value="Enviar" />
      </tr>
    </table>
    <p>&nbsp;</p>
    </form>
  </body>
</html>