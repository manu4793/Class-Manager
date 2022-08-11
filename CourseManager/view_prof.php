
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $query = "SELECT * FROM profesores";
  $resultado = $conn -> query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ver Profesores</title>
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
        <th>ID Profesor</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Disponibilidad</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
</thead>
      <?php 
      while ($row=$resultado->fetch_assoc()){        
        $prof_name = $row['prof_name'];
        $prof_lname = $row['prof_lname'];
        $prof_phone = $row['prof_phone']; 
        $prof_email = $row['prof_email'];
        $prof_disp = $row['prof_availability'];
        ?>
        <tr>
        <td height="22"><?php echo $row['prof_id'];?></td>
        <td><?php echo $prof_name;?></td>
        <td><?php echo $prof_lname;?></td>
        <td><?php echo $prof_phone;?></td>
        <td><?php echo $prof_email;?></td>
        <td><?php echo $prof_disp;?></td>
        <td><a class="btn btn-success" href="edit_prof_form.php? prof_id=<?php echo $row['prof_id'];?>">Editar</a></td>
        <td><a class="btn btn-danger" href="delete_prof.php? prof_id=<?php echo $row['prof_id'];?>
        "onclick="return confirm('¿Seguro que deseas eliminar este profesor?')">Eliminar</a></td>
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