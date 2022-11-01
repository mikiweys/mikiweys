<?php

include_once 'conexion.php';

// LEER
$sql_leer = 'SELECT * FROM colores';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

// var_dump($resultado);


// AGREGAR
if ($_POST){
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];


    $sql_agregar = 'INSERT INTO colores (color,descripcion) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar -> execute(array($color,$descripcion));

    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKIWEY'S APP</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/css/generales.css">
    <link rel="shortcut icon" href="/IMG/todo/logo2.ico">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
    
<body> 
<!-- Father -->
    <div class="padre">  
<!-- HEADER -->
<nav class="navbar navbar-expand-xl navbar-light bg-white text-center align-items-center shadow ">
  <div class="container-fluid">
        <a class="navbar-brand me-5 pe-5" href="#">
          <img src="/IMG/todo/logo.png" alt="" class="img-fluid " width="100">
        </a>
    <form class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Busca tu producto" id="search"/>
        <button class="btn btn-outline-warning" type="submit">BUSCAR</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav px-5 mx-5 ">
        <li class=" mx-2 col-3 align-self-center text-center">
            <a class="nav-link fs-5 hovernaranja" href="html/nosotros.html">
                <i class="bi bi-people"></i>
                <span class="off fs-5">NOSOTROS</span>
            </a>
        </li>
        <li class=" mx-2 col-3 align-self-center text-center">
            <a class="nav-link fs-5 hovernaranja" href="html/productos.html">
                <i class="bi bi-telephone"></i>
                <span class="off">CONTACTO</span> 
            </a>
        </li>
        <li class=" dropdown mx-2 col-3 align-self-center text-center">
          <a class="nav-link dropdown-toggle fs-5 hovernaranja" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-shop"></i>
            <span class="off">PRODUCTOS</span>  
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class=" dropdown mx-2 col-3 align-self-center text-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-5 text-warning"></i>
              <span class="off hovernaranja">Mi Cuenta</span>  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/html/registro.html">Ingresa</a></li>
              <li><a class="dropdown-item" href="#">no se</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item hoverrojo" href="#">Cerrar sesion</a></li>
            </ul> 
          </li>
      </ul>
    </div>
  </div>
</nav>

<!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/IMG/index/1 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="" width="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/IMG/index/2 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/IMG/index/3 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
<!-- PRESENTACION -->
        <div class="p-5 d-flex container color shadow">      
            <div class="row align-items-start">
                <div class="text-orange">
                    <h1 class="display-5 text-warning abril mt-4">PANADERÍA <br> MIKIWEYS</h1>
                </div>
                <div class="simoneta">
                    <h3>La frescura es nuestra <br> especialidad</h3>
                </div>
                <div class="">
                    <button type="button" class="btn btn-warning p-4 rounded hovercafe textwhite">Comprar ahora ></button>  
                </div>
            </div>  
                <div class="">
                    <img class="img-fluid" src="IMG/index/panpresentacion.png"> 
                </div>
        </div> 
<!-- COSAS -->
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-12 col-xl-auto p-5 me-auto my-3 shadow color">
      <img class="img-fluid" src="/IMG/index/pancosas.png" alt="">
      <p>PAN</p>
      <a href="">COMPRAR AHORA ></a>
    </div>
    <div class="col-12 col-xl-auto p-5 mx-auto my-3 shadow color">
      <img class="img-fluid" src="/IMG/index/postres.png" alt="">
      <p>POSTRES</p>
      <a href="">COMPRAR AHORA ></a>
    </div>
    <div class="col-12 col-xl-auto p-5 ms-auto my-3 shadow color">
      <img class="img-fluid" src="/IMG/index/bebidas.png" alt="">
      <p>BEBIDAS</p>
      <a href="">COMPRAR AHORA ></a>
    </div>
  </div>
</div>
<!-- FOOTER -->

<footer class="bg-warning text-center text-white ">
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
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://drive.google.com/drive/folders/1w9-5eskY0_HmaS-DhS0j9EgGt4sMxS-O?usp=sharing" role="button">
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
    </div>
</body>
</html>