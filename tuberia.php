<?php 
  $page_title = "Tuberia";
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
          <h1>Tuberia tremie </h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li><a href="construccion.php">Cimentación y construcción</a></li>
            <li class="active"><a href="tuberia.php">Tuberia</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3">  
              <img style="height: 300px;" src="images/productos/tuberia.jpg" alt="imagen de un balde">
            </div>
            <div class="col-sm-12 col-xl-6">
              <h2>Tuberia tremie</h2>
              <p class="subtitle heading-5">
                CARACTERISTICAS DE FABRICACION
              </p>
              <ul>
                <li>Diametro 6” / 8” / 10”</li>
                <li>Union tipo rosca o soga</li>
                <li>Tuberia en acero al carbono</li>
                <li>Tramos a conveniencia de 0,05m / 1,00m / 2,00m / 3,00m / 4,00m</li>
                <li>Acoples en acero de alta calidad SKF</li>
                <li>Kit con embudos / frenos / guaya</li>
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