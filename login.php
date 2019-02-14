<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logos-i19-1-267x127.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Login</title>
<?php
    include_once 'Vistas/links.html';
?>
</head>
<body>
<?php
    include_once 'Vistas/head.html';
?>
<!-- A partir de aqui va el contenido de la pagina -->
<form action="logeo.php" method="POST" autocomplete="off">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <br>
            <center>
            <div style="background-color: rgb(20, 135, 155); color: white; border-top-left-radius: 40%; border-top-right-radius: 40%; width:90%;">
                <br>
                <center>
                    Inicia sesión
                </center>
                <br>
            </div>
            </center>
            <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <input type="text" class="form-control" placeholder="Usuario" name="usu">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <input type="password" class="form-control" placeholder="Contraseña" name="passw">
                </div>
            </div>
            <br>
            <center>
                <input type="button" value="Iniciar sesión" class="btn">
            </center>
            <br>
        </div>
    </div>
</div>
</form>
<!-- Hasta aqui -->
<div class="empujar2"></div>
<?php
    include_once 'Vistas/footer.html';
?>
<?php
    include_once 'Vistas/scripts.html';
?>
</body>
</html>