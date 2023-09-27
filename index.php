<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKIWEY'S APP</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

    <!-- LIBRERÍAS CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css">

    <!-- LOGO ICON -->
    <link rel="shortcut icon" href="IMG/todo/logo2.ico">
    <link rel="icon" sizes="192x192" href="IMG/todo/logo2.ico">
    <link rel="favicon" href="IMG/todo/logo2.ico">
    <link rel="apple-touch-icon" href="IMG/todo/logo2.ico">

    <!-- META  -->
    <meta name="description" content="Panadería Mikiweys">


    
</head>
    
<body data-bs-theme="light"> 
<!-- Father -->
<div class="padre">  
<!-- HEADER -->
<header>
<nav id="navbar" class="navbar navbar-expand-xl bg-white fixed-top text-center align-items-center shadow">
  <div class="container-fluid d-flex ">
     <!-- OFFCANVAS BTN -->
     <a class="d-flex d-xl-none btn btn-outline-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <i class="bi-list"></i>
    </a>
    <!-- LOGO -->
        <a class="navbar-brand containerzoom giroi " href="index.php">
          <img id="logo" src="IMG/todo/logo.png" alt="" class="img-fluid " width="100">
        </a>
    <!-- BUSCAR -->
    <form class="d-none d-xl-flex">
        <input class="form-control me-2" type="search" placeholder="Busca tu producto" id="search"/>
        <button class="btn bordenaranja naranja bhovernaranja" type="submit">BUSCAR</button>
    </form>
    <!-- BOTÓN SEARCH -->
    <div class="collapse collapse-horizontal" id="collapseWidth">
      <div class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Busca tu producto" id="search"/>
        <button class="btn bordenaranja naranja bhovernaranja" type="submit"><i class="bi bi-search"></i>
        </button>
      </div>
    </div>
      <button class="btn btn-outline-warning d-flex d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth" aria-expanded="false" aria-controls="collapseWidth">
        <i class="bi bi-search"></i>
      </button>
      
   <!-- SEARCH CEL -->
    <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav px-5 mx-5 ">
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="view/user/nosotros.php">
                <i class="bi bi-people"></i>
                <span class="off ">Nosotros</span>
            </a>
        </li>
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="view/user/contacto.php">
                <i class="bi bi-telephone"></i>
                <span class="off">Contacto</span> 
            </a>
        </li>
        <li class=" mx-2 col-3 align-self-center text-center">
          <a class="nav-link hovernaranja" href="view/user/productos.php">
            <i class="bi bi-shop"></i>
              <span class="off">Productos</span> 
          </a>
      </li>

        <li class=" dropdown  col-3 align-self-center text-center ">
            <a class="nav-link dropdown-toggle hovernaranja" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle  naranja"></i>
              <span class="off">Mi cuenta</span>  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="view/login.php">Ingresa</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="view/user/registro.php">Tu perfil</a></li>
              <li><a class="dropdown-item" href="view/user/carrito.php">Tu carrito</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Cerrar sesión </a></li>
            </ul> 
          </li>
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <small id="itoggle" class="bi bi-sun "> Tema</small>
            </button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-end">
              <li>
                <button id="btnlight" onclick="light()" class="btn">
                  <i id="ilight" class="bi bi-sun"> Claro</i>
                </button>
              </li>
              <li>
                <button id="btndark" onclick="dark()" class="btn">
                  <i id="idark" class="bi bi-moon "> Oscuro</i>
                </button>
              </li>
            </ul>
          </div>
          </div>
      </ul>
    </div>
  </div>
</nav>
  
</button>

<!-- OFFCANVAS -->
<div class="offcanvas offcanvas-start w-75 " tabindex="-1" id="offcanvasExample">
  <div class="offcanvas-header border border-bottom ">
    <a class="navbar-brand containerzoom giroi " href="index.php">
      <img id="logor"  src="IMG/todo/logo.png" alt="" class="img-fluid " width="65">
    </a>
    <h5 class="offcanvas-title">
      Menú
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="" class="nav-link active bg-warning" aria-current="page">
            Inicio
          </a>
        </li>
        <li>
          <a class="nav-link" href="view/user/nosotros.php">
            <i class="bi bi-people"></i>
            <span class="">Nosotros</span>
        </a>
        </li>
        <li>
          <a class="nav-link " href="view/user/contacto.php">
            <i class="bi bi-telephone"></i>
            <span class="off">Contacto</span> 
        </a>
        </li>
        <li>
          <a class="nav-link" href="view/user/productos.php">
            <i class="bi bi-shop"></i>
              <span class="off">Productos</span> 
          </a>
        </li> 
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="IMG/todo/client.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>Cliente</strong>
        </a>
        <button id="btnrtema" onclick="tema()" class="btn" ><i id="irtema" class="bi bi-sun"></i></button>
        <ul class="dropdown-menu dropdown-menu-white text-small shadow">
          <li><a class="dropdown-item" href="#">Configuración</a></li>
          <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
        </ul>
      </div>
    </div>
</div>
</header>

<!-- ACOMODAR RESPONSIVE -->
<br class="d-flex d-xl-none">
<br class="d-flex d-xl-none">
<!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide w-100 mt-5 " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-white" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="bg-white"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="bg-white"></button>
                    </div>
                    <div class="carousel-inner ">
                      <div class="carousel-item active">
                        <img src="IMG/index/1carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="" width="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5 text-white">First slide label</h5>
                          <p class="text-white">Some representative placeholder for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/index/2carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5 text-white">Second slide label</h5>
                          <p class="text-white">Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/index/3carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5 text-white">Third slide label</h5>
                          <p class="text-white">Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
<!-- PRESENTACIÓN -->
<main>
        <div class="p-5 container color shadow" id="main">   
          <!-- PROMOCIONES -->
            <div class="row align-items-start mb-5">
            <h1 class="text-center mb-3 pb-3 " >Nuestros productos</h1>
              <h2 class="naranja simoneta border-bottom border-warning border-2 mb-3" id="promociones">Promociones</h2>   
              <!--  -->
              <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover ">
                <div class="card m-auto shadow">
                  <div class="position-relative">
                    <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">99%</span>
                  </div>
                  <div class="card-body row align-items-center ">
                    <div class="w-50">
                      <h5 class="card-title">Pan</h5>
                      <p class="card-text">precio</p>
                    </div>
                    <div class="w-50 text-end">
                      <a href="#inicio" id="liveToastBtn" class="btn bordenaranja naranja bhovernaranja">
                        <i class="bi bi-cart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
     
              <!--  -->
              <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                <div class="card m-auto shadow">
                  <div class="position-relative">
                    <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">99%</span>
                  </div>
                  <div class="card-body row align-items-center ">
                    <div class="w-50">
                      <h5 class="card-title">Pan</h5>
                      <p class="card-text">precio</p>
                    </div>
                    <div class="w-50 text-end">
                      <a href="#inicio" id="liveToastBtn" class="btn bordenaranja naranja bhovernaranja">
                        <i class="bi bi-cart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                <div class="card m-auto shadow">
                  <div class="position-relative">
                    <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">99%</span>
                  </div>
                  <div class="card-body row align-items-center ">
                    <div class="w-50">
                      <h5 class="card-title">Pan</h5>
                      <p class="card-text">precio</p>
                    </div>
                    <div class="w-50 text-end">
                      <a href="#inicio" id="liveToastBtn" class="btn bordenaranja naranja bhovernaranja">
                        <i class="bi bi-cart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                <div class="card m-auto shadow">
                  <div class="position-relative">
                    <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">99%</span>
                  </div>
                  <div class="card-body row align-items-center ">
                    <div class="w-50">
                      <h5 class="card-title">Pan</h5>
                      <p class="card-text">precio</p>
                    </div>
                    <div class="w-50 text-end">
                      <a href="#inicio" id="liveToastBtn" class="btn bordenaranja naranja bhovernaranja">
                        <i class="bi bi-cart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>

            <!-- CATEGORÍAS -->
            <div class="row align-items-start mb-5 pb-5">
                <h2 class="naranja simoneta border-bottom border-warning border-2 mb-4 text-center">Categorías</h2>   
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-6 col-xl-3 mb-3 containerzoom zoomhover">
                  <div class="card m-auto shadow" id="card">
                    <div class="position-relative">
                      <a href="">
                        <img src="IMG/index/pan.jpg" class="card-img-top " alt="...">
                      </a>
                    </div>
                    <div class="card-body row align-items-center">
                      <div class="w-100 text-center">
                        <h5 class="card-title">Pan rico</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--  -->
                <!-- MAPA  -->
                <div class=" row align-content-center justify-content-center align-items-center my-5 ">
                  <div class=" text-center col-12 col-xl-5">
                    <h2 class="simoneta text-center mb-4 display-6">Nuestra ubicación</h2>   
                    <p>Te esperamos atentos a tu pedido</p>
                  </div>
                  <div class="card col-12 col-xl-7 shadow bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497.1587143266008!2d-74.0973163!3d4.5454062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fa305327234bd%3A0x1def170cc4342a97!2sPanaderia%20Mikiwey!5e0!3m2!1ses!2sco!4v1691633825504!5m2!1ses!2sco" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  class="card-img-top"></iframe>
                    <div class="card-body text-center">
                      <h5 class="card-title">¡Encuentranos aqui!</h5>
                      <a target="_blank" href="https://maps.google.com/maps?ll=4.545443,-74.097319&z=19&t=m&hl=es&gl=CO&mapclient=embed&cid=2156968090132556439" class="btn bordenaranja naranja bhovernaranja">Ver en google maps</a>
                    </div>
                  </div>
                </div>
          </div>
        </main>
<!-- TOAST-->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header shadow bg-white align-items-center">
      <img src="IMG/index/pan.jpg" class="rounded me-2 img-fluid" alt="..." width="60" height="60">
      <strong class="me-auto fs-6 cafe">Añadido al carrito <i class="bi bi-check text-success"></i></strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div> 

<!-- idk -->
<!-- FOOTER -->

<footer class="bnaranja text-center text-white container-fluid h-100">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="pb-5">
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

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- MY JS -->
    <script src="js/index.js"></script>


<!-- http://127.0.0.1:5500/index.php -->
 