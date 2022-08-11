<!DOCTYPE html>
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $curso_seccion = $_GET['curso_seccion'];	
  $query = "SELECT * FROM curso WHERE curso_seccion ='$curso_seccion'";
  $resultado = $conn -> query($query);
  $row = $resultado->fetch_assoc();
?>
<html lang="en">
<head>
  <title>Modificar Curso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
<div class="row">
<h1></h1>
<div class="container">
<div class="row">
<div class="container">
  <form name="edit_curso" action="edit_curso.php? curso_seccion=<?php echo $row['curso_seccion'];?>" method="POST" >

    <div class="form-group">
      <label for="Seccion">Sección:</label>
      <input type="text" class="form-control" id="Seccion" name="Seccion" value="<?php echo $row['curso_seccion']; ?>">
    </div>

    <div class="form-group">
      <label for="Materia">Materia del Curso:</label>
      <input type="text" class="form-control" id="curso_materia" name="curso_materia" value="<?php echo $row['curso_materia']; ?>">
    </div>

    <div class="form-group">
      <label for="Numero del Curso">Número del Curso:</label>
      <input type="text" class="form-control" id="curso_numero" name="curso_numero" value="<?php echo $row['curso_numero']; ?>">
    </div>

    <div class="form-group">
      <label for="Nombre del Curso">Nombre del Curso:</label>
      <input type="text" class="form-control" id="curso_name" name="curso_name" value="<?php echo $row['curso_name']; ?>">
    </div>

    <div class="form-group">
    <?php //Conectar a la Db y Tabla Disciplinas.					
		$resultset = $conn -> query("SELECT * FROM disciplina");
	?>

    <label class="col-sm-2">Disciplina: </label><select name="curso_disciplina" class="form-control" >
   <option selected>Seleccionar Disciplina</option>
   <?php while($row2 = $resultset -> fetch_assoc())
		{
			$disc_id = $row2['disc_id'];
      $disc_nombre = $row2['disc_nombre'];
			echo "<option value=>$disc_nombre</option>";
		}
        ?>
    </select>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
    <a href="view_cursos_total.php" class="btn btn-primary" role="button">Regresar</a>
  </form>
</div>
</main>
</body>
<footer>
  <?php include 'include/footer.php';?>
</footer>	
</html>