<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">CMS Ejemplo</a>
        <ul class="navbar-nav">
          
            <li><a class="nav-link" href="?method=login">Iniciar Sesion</a>

        </ul>
        <ul class="navbar-nav">
           <li><a class="nav-link" href="?controller=user&method=create">Registrarse</a>
        </ul>


<?php  if(isset($_SESSION['user']) && $_SESSION['user']->rol_id == "2"): ?>
          <ul class="navbar-nav">
            <li><a class="nav-link" href="?controller=user">Usuarios</a>
            </ul>
             
        
<?php endif; ?>
       

        <?php if(isset($_SESSION['user'])): ?>
                <center><?=$_SESSION['user']->name?></center>
            <ul>
               <a href="?controller=security&method=logout"><font color ="white">Cerrar sesion</font></a>
            </ul>
        <?php endif; ?>
    </nav>
    <main class="container">