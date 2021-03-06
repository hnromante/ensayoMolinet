<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Ensayo PHP - Molinet</title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <link rel="stylesheet" href="css/style.css">

    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
      .radios p {
        display: inline;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="cyan">
        <div class="nav-wrapper">
          <div class="container">
            <a href="/molinet1/productos" class="brand-logo">Ensayo PHP Molinet</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/molinet1/productos">Inicio</a></li>
              <li><a href="/molinet1/productos/agregar.php">Agregar</a></li>
              <li><a href="/molinet1/productos/buscar.php">Buscar</a></li>
              <li><a href="/molinet1/admin">Admin</a></li>
              
            </ul>
            <ul class="side-nav" id="mobile-menu">
              <li>
                <div class="userView">
                  <div class="background">
                    <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="Background Sidenav">
                  </div>
                  <a href="#!user"><img class="circle" src="../img/logo.jpg" alt="User Image Sidenav"></a>
                  <a href="#!name"><span class="white-text name">Empresas Molinet</span></a>
                  <a href="#!email"><span class="white-text phone"> +56 72 222 5736</span></a>
                </div>
              </li>
              <li><a href="/molinet1/productos">Inicio</a></li>
              <li><a href="/molinet1/productos/agregar.php">Agregar</a></li>
              <li><a href="/molinet1/productos/buscar.php">Buscar</a></li>
              <li><a href="/molinet1/admin">Admin</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
      <main>
      <!-- Your content here -->
   