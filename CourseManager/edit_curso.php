<?php session_start();

include("include/connect.php");
include("include/functions.php");
$curso_seccion = $_GET['curso_seccion'];
$seccion = $_POST['Seccion'];
$curso_materia = $_POST['curso_materia'];
$curso_numero = $_POST['curso_numero'];
$curso_name = $_POST['curso_name'];
$curso_disciplina = $_POST['curso_disciplina'];

$sql = "UPDATE curso set curso_seccion = '$seccion', curso_materia = '$curso_materia', curso_numero = '$curso_numero', curso_name = '$curso_name',
curso_disciplina = '$curso_disciplina' WHERE curso_seccion = '$curso_seccion'";

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
  <title>Editar Disciplina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <header>
  <?php include 'include/header.php';?>
</header>
<nav>
	<?php include 'include/menu.php';?>
</nav>
		<main>
      <center>	
    <br>		
    <div class="container">	
  <br>	
  <div class="alert alert-success alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong>Success!</strong> Curso Actualizado.
  </div>

<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>
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