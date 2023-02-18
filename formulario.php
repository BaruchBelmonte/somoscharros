<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: registro.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="img/Logo.ico" type="icon">
    <title>Registro - Todos podemos ser charros</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <img src="img/Logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top"/> 
      <p style="color: #212529;">ggg</p>  
      <a class="navbar-brand" href="index.html">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="programa.html">Programa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Carrusel -->
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#804000"/>
         <image xlink:href="img/img1.jpg" x="950" y="-5"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>¡Bienvenidos al congreso!</h1>
            <p>Primer Congreso Nacional <br> "Todos podemos ser Charros"</p>
          </div>
        </div>
      </div>

      <div class="carousel-item" >
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#804000"/>
          <image xlink:href="img/img2.jfif" x="0" y="-10"/></svg>
        
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>El lienzo charro</h1>
            <p>La Perla Tapatía es el escenario principal <br> más grandes y famosos lienzos charros.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#804000"/>
          <image xlink:href="img/img3.jpeg" x="0" y="-15"/></svg>
        
        <div class="container">
          <div class="carousel-caption text-end">
          <h1>¿Dudas?</h1>
            <p>Te podemos atender en la pestaña de <a href="contacto.html" style="color:rgb(255,255,255)">Contacto</a></p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container" style="margin-top:30px">
    <table>
      <tr>
        <td>
          <div class="col-sm-12">

          <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@todoscharros" data-unique-id="todoscharros" data-embed-from="oembed" data-embed-type="creator" style="max-width: 540px; min-width: 540px;" > <section> <a target="_blank" href="https://www.tiktok.com/@todoscharros?refer=creator_embed">@todoscharros</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>

          </div>
        </td>
        <td>
          <div class="col-sm-12">
            <img src="img/blanko.png" alt="blanko" width="300" height="300">
          </div>
        </td>
        <td>

        <h1>Registro</h1>
            <form action="registrar.php" method="POST"><BR>
              <input type="text" name="nombre" placeholder="Nombre(s)" required> 
              <input type="text" name="aPaterno" placeholder="Apellido Paterno" required>
              <input type="text" name="aMaterno" placeholder="Apellido Materno" required><BR><BR> 
              <input type="text" name="telefono" placeholder="Teléfono a 10 digitos" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
              <input type="mail" name="email" placeholder="Email" required><BR><BR>
              <input type="submit" value="Registrarse">
              <input type="reset" value="Borrar todo"><BR><BR>
            </form>

        </td>
      </tr>
    </table>
    </div>
  </div>

  <br><br><br><br>
  <!-- FOOTER -->
  <footer class="container">
  <p class="float-end"><a href="#">Volver arriba</a></p>
    <p>&copy; 2019–2023 Isai Vargas &middot;</p>
  </footer>
    <script src="js/bootstrap.bundle.min.js"></script>      
  </body>
</html>