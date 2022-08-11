<?php session_start();

include("include/connect.php");
include("include/functions.php");
	$curso_seccion = $_GET['curso_seccion'];
	$sql="DELETE FROM curso WHERE curso_seccion = '$curso_seccion'";

?>
<html>
	<head>
	<head>
  <title>Curso Eliminado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
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
	<center>
			<?php
				if($conn->query($sql) === TRUE){
				?>
  <div class="alert alert-danger alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong>Alert!</strong> Curso Eliminado.
  </div>
<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>
				<?php }
				else
				{ ?>
				<h2>Error al Eliminar Curso</h2>
				<?php } ?>
				<br>
			<a href="index.php" class="btn btn-primary" role="button">Regresar</a>
			</div>
				</center>
		</main>
		<footer>
  <?php include 'include/footer.php';?>
</footer>		
	</body>
</html>
