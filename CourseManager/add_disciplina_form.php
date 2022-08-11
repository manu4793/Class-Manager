<!DOCTYPE html>
<?php session_start();

include("include/connect.php");
include("include/functions.php");?>
<html lang="en">
<head>
  <title>Añadir disciplina</title>
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
  <form action="add_disciplina.php" method="POST" >
    <div class="form-group">
      <label for="Disciplina">Disciplina:</label>
      <input type="text" class="form-control" id="Disciplina" name="Disciplina" value="Ciencias Sociales">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
    <a href="index.php" class="btn btn-primary" role="button">Regresar</a>
  </form>
</div>
</main>
<footer>
  <?php include 'include/footer.php';?>
</footer>		
</body>
</html>