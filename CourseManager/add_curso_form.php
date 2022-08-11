<?php 
session_start();

include("include/connect.php");
include("include/functions.php");
?>
<!DOCTYPE html>
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
  <form action="add_curso.php" method="POST" >

    <div class="form-group">
      <label for="Seccion">Sección:</label>
      <input type="text" class="form-control" id="Seccion" name="Seccion" value="12345">
    </div>

    <div class="form-group">
      <label for="Materia">Materia del Curso:</label>
      <input type="text" class="form-control" id="Materia" name="Materia" value="COMP">
    </div>

    <div class="form-group">
      <label for="Numero">Número del Curso:</label>
      <input type="text" class="form-control" id="Numero" name="Numero" value="4400">
    </div>

    <div class="form-group">
      <label for="Nombre">Nombre del Curso:</label>
      <input type="text" class="form-control" id="Nombre" name="Nombre" value="Sistemas Operativos">
    </div>

    <?php //Conectar a la Db y Tabla Categoria.					
	    $resultset = $conn -> query("SELECT * FROM disciplina");
	?>
 <label class="col-sm-2">Disciplina: </label><select name="disc_nombre" class="form-control" >
   <option selected>Seleccionar Disciplina</option>
   <?php 
		while($row = $resultset -> fetch_assoc())
		{
		    $disc_nombre = $row['disc_nombre'];
			echo "<option>$disc_nombre</option>";
		}
    ?>
    </select>
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