<!DOCTYPE html>
<?php session_start();

include("include/connect.php");
include("include/functions.php");

$curso_seccion = $_GET['curso_seccion'];
$prof_id = $_GET['prof_id'];

$sql = "UPDATE curso set prof_id = '$prof_id'WHERE curso_seccion = '$curso_seccion'";

if ($conn->query($sql) === TRUE) {
}  
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<html>
<head>
	<meta charset="UTF-8">
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
	<center>
	<div class="container">
	<div class="alert alert-success alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong>Success!</strong> Profesor Añadido a Curso.
  </div>

<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>
		<br>
		<a href="index.php" class="btn btn-primary" role="button">Done</a>
</div>
	</center>
</main>
<footer>
  <?php include 'include/footer.php';?>
</footer>		
</body>
</html>