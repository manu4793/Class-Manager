<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Home</a>

  <!-- Links -->
  <ul class="navbar-nav">

    		<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Disciplinas
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="add_disciplina_form.php">Add New</a>
        <a class="dropdown-item" href="view_disciplina.php">View/Edit/Delete</a>
      </div>
      
    		<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Cursos
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="add_curso_form.php">Add</a>
        <a class="dropdown-item" href="view_cursos_total.php">View/Edit/Delete</a>
      </div>
      
          <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Profesores
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="add_profesor_form.php">Add</a>
        <a class="dropdown-item" href="view_prof.php">View/Edit/Delete</a>
      </div>
      
    		<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuarios
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="add_usuario_form.php">Add</a>
        <a class="dropdown-item" href="view_usuario.php">View/Edit/Delete</a>
      </div>
    </li>

    <!-- LOGOUT -->
    <li class="nav-item">
      <a class="nav-link" href="logout.php" id="navbaritem">
        Logout
      </a>
    </li>
  </ul>
</nav>
<br>

</body>
</html>