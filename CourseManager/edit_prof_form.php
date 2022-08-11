
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $prof_id = $_GET['prof_id'];	
  $query = "SELECT * FROM profesores WHERE prof_id ='$prof_id'";
  $resultado = $conn -> query($query);
  $row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Profesor</title>
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
  <form name="edit_prof" action="edit_prof.php? prof_id=<?php echo $row['prof_id'];?>" method="POST" >

    <div class="form-group">
      <label for="Nombre">Nombre:</label>
      <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $row['prof_name']; ?>">
    </div>

    <div class="form-group">
      <label for="Apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $row['prof_lname']; ?>">
    </div>

    <div class="form-group">
      <label for="Telefono">Teléfono:</label>
      <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $row['prof_phone']; ?>">
    </div>

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $row['prof_email']; ?>">
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