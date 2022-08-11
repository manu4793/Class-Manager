
<?php 
session_start();

include("include/connect.php");
include("include/functions.php");

$user_data = check_login($conn);
  $query = "SELECT * FROM disciplina ORDER BY `disciplina`.`disc_nombre` ASC";
  $resultado = $conn -> query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Colegio Comunitario</title>
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
<br>       
<table class="table">
<thead class="thead-dark">
      <tr>
        <th>Disciplinas</th>
        <th>Cursos</th>
      </tr>
</thead>
      <?php 
      while ($row=$resultado->fetch_assoc()){        
        $disc_nombre = $row['disc_nombre']; 
        ?>

        <tr>
        <td><?php echo $disc_nombre;?></td>
        <td><a class="btn btn-primary" href="view_cursos.php? disc_nombre=<?php echo $row['disc_nombre'];?>">View</td>
        </tr>
        <?php } ?>
      </thead>
    </table>
  </div>
</main>	
<footer>
    <?php include 'include/footer.php';?>
</footer>	
</body>
</html>