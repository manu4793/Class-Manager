
<?php session_start();

include("include/connect.php");
include("include/functions.php");
  $disc_id = $_GET['disc_id'];	
  $query = "SELECT * FROM disciplina WHERE disc_id ='$disc_id'";
  $resultado = $conn -> query($query);
  $row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Disciplina</title>
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
  <h2>Editar Disciplina:</h2>
  <br>
  <form name="edit_disciplina" action="edit_disciplina.php? disc_id=<?php echo $row['disc_id'];?>" method="POST" >
    <div class="form-group">
      <label for="disc_id">ID: <?php echo $disc_id; ?></label>
      <input type="hidden" class="form-control" id="disc_id" name="disc_id" value="<?php echo $disc_id; ?>">
    </div>
    <div class="form-group">
      <label for="Nombre Disciplina">Nombre de Disciplina:</label>
      <input type="text" class="form-control" id="disc_nombre" name="disc_nombre" value="<?php echo $row['disc_nombre']; ?>">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <a href="view_disciplina.php" class="btn btn-primary" role="button">Regresar</a>
  </form>
</div>
</main>
</body>
<footer>
  <?php include 'include/footer.php';?>
</footer>	
</html>