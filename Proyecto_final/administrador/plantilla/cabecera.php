<?php
session_start();
 /*if($_SESSION['usuario']=="ok"){
    $nombreUsuario=$_SESSION["nombreUsuario"];
}*/
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admi-escape</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="codigo.js"></script>
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/Proyecto_final" ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class= "navbar-brand" href=inicio.php>
			 <img src="img/logo.PNG" widdth="40" height="40" class="d-inline-block align-top" alt="Logo de la pagina">
		</a>
        <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href=" <?php echo $url; ?>/administrador/inicio.php">Inicio</a>
       
        <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productor.php">Libros</a>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Salir</a>
       
        <a class="nav-item nav-link" href=" <?php echo $url; ?>">Ver sitio web</a>
        </div>
    </nav>


  <div class="container">
    <br/>
      <div class="row">