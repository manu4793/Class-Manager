<!DOCTYPE html>
<?php session_start();

include("include/connect.php");
include("include/functions.php");?>
<html lang="en">
<head>
  <title>Añadir Curso</title>
  <meta charset="utf-8">
</head>
<body>
<header>
  <?php include 'include/header.php';?>
</header>
<nav>
	<?php include 'include/menu.php';?>
</nav>	
		<main>
<div class="container">
  <h2>Ingrese la siguiente información:</h2>
  <br>
  <form action="add_profesor.php" method="POST" >

    <div class="form-group">
      <label for="Nombre">Nombre:</label>
      <input type="text" class="form-control" id="Nombre" name="Nombre" value="Pepito">
    </div>

    <div class="form-group">
      <label for="Apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="Perez">
    </div>

    <div class="form-group">
      <label for="Telefono">Teléfono:</label>
      <input type="text" class="form-control" id="Telefono" name="Telefono" value="(787)-111-2222">
    </div>

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="text" class="form-control" id="Email" name="Email" value="pperez@ejemplo.com">
    </div>

    <div class="form-group">
      <label for="Disponibilidad">Disponibilidad (seleccione una):</label>
      <div class="container">
      <select class="form-control" id="Disponibilidad" name="Disponibilidad">
        <option>Mañana (7am - 11am)</option>
        <option>Tarde (12pm - 4pm)</option>
        <option>Noche (4pm - 8pm)</option>
      </select>
    </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
    <a href="index.php" class="btn btn-primary" role="button">Regresar</a>
    <br>
  </form>
</div>
</main>
<footer>
  <?php include 'include/footer.php';?>
</footer>		
</body>
</html>