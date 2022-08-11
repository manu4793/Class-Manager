

<?php session_start();

include("include/connect.php");
include("include/functions.php");
$disc_nombre= $_GET['disc_nombre'];

$sql = "SELECT * FROM curso LEFT OUTER JOIN profesores ON curso.prof_id = profesores.prof_id WHERE curso_disciplina = '$disc_nombre'";
$resultado = $conn -> query($sql);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ver Disciplinas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
  <?php include 'include/header.php';?>
</header>
<nav>
	<?php include 'include/menu.php';?>
</nav>	
<center> <h2>Disciplina: <?php echo $disc_nombre ;?> </h2> </center>
<main>
<div class="container">
<br>       
<table class="table">
<thead class="thead-dark">
      <tr>
        <th>Seccion</th>
        <th>Materia</th>
        <th>Numero</th>
        <th>Nombre</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        <th>Profesor</th>
        <th></th>
      </tr>


</thead>
      <?php 
        
      while ($row=$resultado->fetch_assoc()){
        $curso_seccion = $row['curso_seccion'];
        $curso_materia = $row['curso_materia'];
        $curso_numero = $row['curso_numero'];
        $curso_name = $row['curso_name'];
        $prof_id = $row['prof_id'];
        $prof_name = $row['prof_name']; 
        $prof_lname = $row['prof_lname']; 
         ?>
 
        <tr>
        <td height="22"><?php echo $row['curso_seccion'];?></td>
        <td><?php echo $curso_materia;?></td>
        <td><?php echo $curso_numero;?></td>
        <td><?php echo $curso_name;?></td>
        <td><a class="btn btn-success" href="edit_curso_form.php? curso_seccion=<?php echo $row['curso_seccion'];?>">Editar</td>
        <td><a class="btn btn-danger" href="delete_curso.php? curso_seccion=<?php echo $row['curso_seccion'];?> 
        "onclick="return confirm('¿Seguro que deseas eliminar esta disciplina?')">Eliminar</a></td>

      <?php if($prof_id == NULL){ ?>

      <td><a class="btn btn-primary" href="asignar_profesor_form.php? curso_seccion=<?php echo $row['curso_seccion'];?>">Asignar</td>
          </tr>

          <?php } else { ?>

        <td><?php echo $prof_name, " $prof_lname";?></td>
        
        <?php } ?>
        <?php if($prof_id != NULL) { ?>
          <td><a class="btn btn-danger" href="remover_profesor.php? curso_seccion=<?php echo $row['curso_seccion'];?> & prof_id=<?php echo $row['prof_id'];?>
          "onclick="return confirm('¿Seguro que deseas remover el profesor?')">Remover</td>
        <?php } ?>
        <?php } ?>

      </thead>
    </table>
    <a href="index.php" class="btn btn-primary" role="button">Regresar</a>
  </div>
</main>	
<footer>
  <?php include 'include/footer.php';?>
</footer>		
</body>
</html>