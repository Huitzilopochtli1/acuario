<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud en php y mysql</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/431ee10d54.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- MENU LATERAL -->
<div class="d-flex">
    <nav id="sidebar" class="bg-dark text-light col-md-4 col-sm-4">
      <ul class="list-unstyled">
        <li><a href="#" class="text-decoration-none link">Home</a></li>
        <li><a href="#" class="text-decoration-none link">Catálogo</a></li>
        <li><a href="#" class="text-decoration-none link">Administradores</a></li>
        <li><a href="#" class="text-decoration-none link">Usuarios</a></li>
        <li><a href="#" class="text-decoration-none link">Contacto</a></li>
        <li><a href="#" class="text-decoration-none link">Salir</a></li>
      </ul>
    </nav>


    <!-- ------------------------------------------------------------------------------------------------ -->
      <!-- CARRUSEL -->
    <main class="flex-grow-1 ms-md-3 p-3">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagenes/bomba.webp" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
              <p class="descripcion-diapositiva">BOMBA</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagenes/filtro.webp" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
              <p>FILTRO</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagenes/luz-led.webp" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
              <p>LUZ LED</p>
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


      

    </main>
  </div>
  
  
  <!-- ------------------------------------------------------------------------------------------------------------------------ -->
  <!-- BASE DE DATOS -->
  <div class="container-fluid row container-base-datos-inventario">
  
  <!-- <div class="container row container-base-datos-contactos"> -->
      <!-- CONTACTOS -->
    <div class="col-6 p-4 contenedor-contactos">
  
      <table class="table-contactos">
        <thead class="bg-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Compañia</th>
            <th scope="col">Contacto</th>
            <th scope="col">Pais</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include "modelo/conexion.php";
        $sql = $conexion->query(("SELECT * FROM CONTACTOS LIMIT 10"));
        while ($datos = $sql->fetch_object()) { ?>
  
          <tr>
            <td><?= $datos->ID?></td>
            <td><?= $datos->COMPAÑIA?></td>
            <td><?= $datos->CONTACTO?></td>
            <td><?= $datos->PAIS?></td>
          </tr>
       
          <?php }
        ?>

         </tbody>
      </table> <!-- FIN TABLA CONTACTOS -->
    </div> <!-- FIN CLASS COL-6 CONTACTOS -->
  
  
    
  <!-- --------------------------------------------------------------------------------------- -->
    <!-- INVENTARIO -->
    <div class="col-6 p-4 contenedor-inventario">
      <table class="table-inventario">
        <thead class="bg-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Articulo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Unidad</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "modelo/conexion.php";
          $sql = $conexion->query(("SELECT * FROM INVENTARIO"));
          while ($datos = $sql->fetch_object()) { ?>

            <tr>
              <td><?= $datos->CODIGO ?></td>
              <td><?= $datos->ARTICULO ?></td>
              <td><?= $datos->CANTIDAD ?></td>
              <td><?= $datos->UNIDAD ?></td>
            </tr>
             
            <?php }
             ?>

        </tbody>

      </table> <!-- FIN TABLA CONTACTOS -->
    </div> <!-- FIN CLASS COL-6 --> 
    <!-- </div> FIN CLASS CONTAINER INVENTARIO -->

  </div> <!-- fin container-fluid -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

</body>
</html>
    
    
    
    

