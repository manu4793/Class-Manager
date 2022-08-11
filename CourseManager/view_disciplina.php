
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $query = "SELECT * FROM disciplina ORDER BY `disciplina`.`disc_nombre` ASC";
  $resultado = $conn -> query($query);
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
<main>
<div class="container">
<br>       
<table class="table">
<thead class="thead-dark">
      <tr>
        <th>ID Disciplina</th>
        <th>Nombre de Disciplina</th>
        <th>Editar</th>
        <th>Eliminar</th>
        <th>Cursos</th>
      </tr>
</thead>
      <?php 
      while ($row=$resultado->fetch_assoc()){        
        $disc_nombre = $row['disc_nombre']; 
        ?>

        <tr>
        <td height="22"><?php echo $row['disc_id'];?></td>
        <td><?php echo $disc_nombre;?></td>
        <td><a class="btn btn-success" href="edit_disciplina_form.php? disc_id=<?php echo $row['disc_id'];?>">Editar</td>
        <td><a class="btn btn-danger" href="delete_disciplina.php? disc_id=<?php echo $row['disc_id'];?>"onclick="return confirm('¿Seguro que deseas eliminar esta disciplina?')">Eliminar</a></td>
        <td><a class="btn btn-primary" href="view_cursos.php? disc_nombre=<?php echo $row['disc_nombre'];?>">View</a></td>
        </tr>
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