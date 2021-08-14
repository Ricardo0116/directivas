<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title> página | @yield('title') </title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="logo">
      <img src="img/dog.jpg" alt="logo">
    </div>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contactanos">Contactános</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="acerca-de">Acerca de</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>
<!--End Navbar -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul>
              <li>
                <a href=""><strong>Explorar</strong></a>
              </li>
              <li>
                <a href=""><strong>Configuración</strong></a>
              </li>
              <li>
                <a href=""><strong>Ayuda</strong></a>
              </li>
              <li>
                <a href=""><strong>Comentarios</strong></a>
              </li>
            </ul>
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>

<!--Footer -->
<footer>
    <div class="container-fluid">
        <p>&copy; Todos los derechos reservados</p>
    </div>
</footer>
</body>
</html>
