<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/materialize.css">
    <script src="../JS/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../CSS/Styles.css">
    <title></title>
</head>
<body>

<?php if(isset($_SESSION['nombre'])){?>
    
<ul id="empleado" class="dropdown-content">
    <li><a href="mostrarEmpleados.php">Mostrar Empleado</a></li>
    <li><a href="FormularioEmpleado.php">Formulario Empleado</a></li>
</ul>
<ul id="login" class="dropdown-content">
    <li><a href="login.php">ingresar al sistema</a></li>
    <li><a href="salir.php">salir del sistema</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="mostrarEmpleados.php">Mostrar Empleado</a></li>
            <li><a href="FormularioEmpleado.php">Formulario Empleado</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="empleado">Empleados<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="login">Login<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<?php }  
    else{
?>
<ul id="login" class="dropdown-content">
  <li><a href="login.php">ingresar al sistema</a></li>
  <li><a href="salir.php">salir del sistema</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-trigger" href="#!" data-target="login">Login<i class="material-icons right">arrow_drop_down</i></a></li>
    
    </ul>
  </div>
</nav>

  <?php } ?>

