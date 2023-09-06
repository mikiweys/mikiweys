<?php 
$id=$_GET["id"];
echo ($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario | MIKIWEY'S APP</title>
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
  <link rel="stylesheet" href="../../css/styles.css">

  <!-- LOGO ICON -->
  <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
  <link rel="icon" sizes="192x192" href="../../IMG/todo/logo2.ico">
  <link rel="favicon" href="../../IMG/todo/logo2.ico">
  <link rel="apple-touch-icon" href="../../IMG/todo/logo2.ico">

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="bg-foto">
<div class=" justify-content-center  color container shadow p-5 w-50" id="subir" tabindex="-1" aria-hidden="true">
    <h1 class=" fs-4 mb">Modificar producto</h1>
    <hr>
        <div class="row text-center">
         <form action="../../controller/inv_subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label  class="fs-5 pb-2">Selecciona una Imagen</label>
              <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="imagen">
              </div>
          </div>
          <div class="form-group row">
            <div class="">
              <label  class="fs-5 py-1 ">Nombre del producto</label>
              <input class="form-control" type="text" name="producto">
            </div>
            <div class="">
              <label  class="fs-5 py-1" >Precio. unidad</label>
              <input  class="form-control" type="number" name="preuni" >
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Categoria</label>
              <input  class="form-control" type="text" name="cat">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Cantidad</label>
              <input  class="form-control" type="number" name="cant" placeholder="Cantidad">
            </div>
          </div>
        </div>
       </div>
      <div class="modal-footer align-items-center justify-content-around">
        <a type="button" href="inventario.php" class="btn btn-secondary">Cancelar</a>
        <input type="submit" value="Guardar" class="btn btn-danger my-5" name="agregar">
      </div>
      </form>
    </div>
  </div>
</div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="../../js/script.js"></script>
</body>
  </html>