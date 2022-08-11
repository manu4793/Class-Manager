<?php session_start();

include("include/connect.php");
include("include/functions.php");

$disc_id = $_GET['disc_id'];
$disc_nombre = $_POST['disc_nombre'];

$sql = "UPDATE disciplina set disc_nombre = '$disc_nombre' WHERE disc_id = '$disc_id'";

if ($conn->query($sql) === TRUE) {

} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
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
    <strong>Success!</strong> Disciplina Actualizada.
  </div>

<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>
		<br>
		<a href="view_disciplina.php" class="btn btn-primary" role="button">Regresar</a>
</div>
</center>
</main>
<footer>
  <?php include 'include/footer.php';?>
</footer>		
	</body>
</html>