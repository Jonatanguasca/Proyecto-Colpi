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
          <h1>CFA (continuous flight auger)</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li><a href="construccion.php">Cimentación y construcción</a></li>
            <li class="active"><a href="cfa.php">CFA (continuous flight auger)</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3">  
              <img style="height: 250px;" src="images/productos/cfa_1.jpg" alt="imagen de un balde">
            </div>
            <div class="col-sm-6 col-md-3">  
              <img style="height: 250px;" src="images/productos/cfa_2.jpg" alt="imagen de un balde">
            </div>
            <div class="col-sm-12 col-xl-6">
              <h4>CFA (continuous flight auger)</h4>
              <h4>Punta roca con valvula 1,00m a 1,50m</h4>
              <h4>Punta roca con valvula 1,00m a 1,50m</h4>
              <p class="subtitle heading-5">
                CARACTERISTICAS DE FABRICACION
              </p>
              <ul>
                <li>Diámetro desde 300mm – 1000mm</li>
                <li>Diámetro desde 300mm – 1000mm</li>
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