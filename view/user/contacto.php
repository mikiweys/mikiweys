<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="../../CSS/font-awesome.min.css">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
    <link rel="stylesheet" href="../../CSS/contacto.css">
</head>
<body>
<!-- Father -->
<div class="padre"> 
<!-- HEADER -->
<header>
<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-white text-center align-items-center shadow">
  <div class="container-fluid">
        <a class="navbar-brand me-5 pe-5" href="../../index.php">
          <img src="../../IMG/todo/logo.png" alt="" class="img-fluid " width="100">
        </a>
    <form class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Busca tu producto" id="search"/>
        <button class="btn bordenaranja naranja bhovernaranja" type="submit">BUSCAR</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav px-5 mx-5 ">
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="nosotros.php">
                <i class="bi bi-people"></i>
                <span class="off ">Nosotros</span>
            </a>
        </li>
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="contacto.php">
                <i class="bi bi-telephone"></i>
                <span class="off">Contacto</span> 
            </a>
        </li>
        <li class=" mx-2 col-3 align-self-center text-center">
          <a class="nav-link hovernaranja" href="productos.php">
            <i class="bi bi-shop"></i>
              <span class="off">Productos</span> 
          </a>
      </li>

        <li class=" dropdown  col-3 align-self-center text-center">
            <a class="nav-link dropdown-toggle hovernaranja" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle  naranja"></i>
              <span class="off">Mi cuenta</span>  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="login.php">Ingresa</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="login.php">Tu perfil</a></li>
              <li><a class="dropdown-item" href="login.php">Tu carrito</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Cerrar sesion </a></li>
            </ul> 
          </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!-- IMAGEN -->
<div class="container-fluid text-center text-light position-relative mt-5 pt-5">
    <div class="row"> 
    <img src="../../IMG/index/1 carrusel.jpg" alt="" class="">
        <div class="col-12 position-absolute top-50 start-50 translate-middle">
          <h1 class="display-5">CONTACTANOS</h1>
          <p class="simoneta fs-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, perferendis!</p>
        </div>
    </div>
</div>
<!-- CONTAINER -->
<div class="container-fluid d-flex">
    <!-- imputs -->
    <div class="row p-5"> 
        <div class="col-12">
            <p class="pt-5 ps-5">Nombre</p>
            <input type="text" name="" id="" class="mx-5 form-control">
        </div>
        <div class="col-12">
            <p class="ps-5 mt-4">Email</p>
            <input type="text" name="" id="" class="mx-5 form-control">
        </div>
        <div class="col-12">
            <p class="ps-5 mt-5">Mensaje</p>
            <div class="form-floating">
              <textarea class="form-control form-text mx-5 textarea"></textarea>
            </div>
        </div>
        <div class="col-12">
          <input type="submit" name="signup_submit" value="Enviar" class="mx-5 px-5 btn mt-5 bnaranja hovercafe text-light"/>
        </div>
    </div>
<!-- texto -->
    <div class="row p-5 mt-5">
        <div class="col-12 mx-5">
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="#!" role="button">
                <i class="bi bi-facebook"></i>
            </a>
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="" role="button">
                <i class="bi bi-instagram"></i>
            </a>
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="" role="button">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
        <div class="col-12 mx-5 mt-5">
            <p class="fs-2 simoneta text-dark">Mikiwey</p>
            <p>KR 3 este 46 B 05 sur</p>
            <p>Villa del cerro, Canadá Güira, Bogotá</p>
        </div>
        <div class="col-12 mx-5 mt-5">
            <p class="fs-3 simoneta text-dark">Correo electronico</p>
            <a href="" class="naranja">correopanaderia@gmail.com</a>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="bnaranja text-center text-white ">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
        <i class="bi bi-facebook"></i>
      </a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
        <i class="bi bi-twitter"></i>
      </a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="" role="button">
        <i class="bi bi-instagram"></i>
      </a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://github.com/mikiweys/mikiweys.github.io" role="button">
        <i class="bi bi-github"></i>
      </a>
    </section>
    <!-- Section: Social media -->
  </div>
</footer>
</div>
</body>
</html>
