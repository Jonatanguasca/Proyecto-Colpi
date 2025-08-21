<?php 
  $page_title = "Brocas";
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
          <h1>Brocas</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li><a href="construccion.php">Cimentación y construcción</a></li>
            <li class="active"><a href="brocas.php">Brocas</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">  
              <img style="height: 250px;" src="images/productos/broca_1.jpg" alt="imagen de un balde">
              <img style="height: 250px;" src="images/productos/broca_2.png" alt="imagen de un balde">
            </div>
            <div class="col-sm-12 col-xl-6">
              <h4>Broca estándar suelo (Soil auger)</h4>
              <h4>Broca estándar roca (Standard rock auger)</h4>
              <h4>Broca cónica roca (Conical rock auger)</h4>
              <p class="subtitle heading-5">
                Características de fabricación
              </p>
              <ul>
                <li>Broca estándar roca (Standard rock auger)</li>
                <li>Kelly box 130 – 150 - 200</li>
                <li>Kelly box 130 – 150 - 200</li>
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