<!DOCTYPE html>
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $curso_seccion = $_GET['curso_seccion'];
  $query = "SELECT * FROM profesores";
  $resultado = $conn -> query($query);
?>

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
        <th>Asignar</th>
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
        <td><a class="btn btn-success" href="asignar_profesor.php? curso_seccion=<?php echo $curso_seccion;?> &prof_id=<?php echo $row['prof_id'];?>">Asignar</td>
        </tr>
        <?php } ?>
      </thead>
    </table>
    <a href="view_cursos_total.php" class="btn btn-primary" role="button">Regresar</a>
  </div>
</main>	
<footer>
  <?php include 'include/footer.php';?>
</footer>		
</body>
</html>