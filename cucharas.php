<?php 
  $page_title = "Cucharas (Grab)";
  $current_page = "areas";
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <?php include 'partials/layout/head.php'; ?>
  </head>

  <body>
    <?php include 'partials/preloader.php'; ?>

    <div class="page">
      <?php include 'partials/layout/header.php'; ?>
      <!-- Breadcrumbs -->
      <section class="section section-bredcrumbs"style="--bg-image: url(../images/estructuras.jpg);">
        <div class="container context-dark breadcrumb-wrapper" >
          <h1>Cucharas (Grab)</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li><a href="construccion.php">Cimentación y construcción</a></li>
            <li class="active"><a href="cucharas.php">Cucharas (Grab)</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <img style="height: 300px;" src="images/productos/cuchara.jpg" alt="imagen de un balde">
            <div class="col-sm-12 col-xl-6">
              <h4>Cuchara mecánica</h4>
              <h4>Cuchara hidráulica</h4>
              <p class="subtitle heading-5">
                CARACTERISTICAS DE FABRICACION
              </p>
              <ul>
                <li>Espesor desde 300mm – 1200mm </li>
                <li>Apertura de mordida desde 1,20m – 2,50m</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>