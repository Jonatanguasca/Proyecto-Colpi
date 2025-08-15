<?php 
  $page_title = "Baldes";
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
          <h1>Baldes</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li class="active">Baldes</li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">  
              <img style="height: 250px;" src="images/productos/balde_suelo.jpg" alt="imagen de un balde">
              <h2>Balde Suelo</h2>
              <p class="subtitle heading-5">
                CARACTERISTICAS DE FABRICACION
              </p>
              <ul>
                <li>Diámetro Exterior – desde 400mm – 2500mm</li>
                <li>Kelly box – 130mm / 150mm / 200mm</li>
                <li>Cierre mecánico o cierre automatico</li>
              </ul>
            </div>
            <div class="col-sm-12 col-xl-6">
              <img style="height: 250px;" src="images/productos/carrotier.png" alt="imagen de un balde">
              <h2>Carrotier</h2>
              <p class="subtitle heading-5">
                CARACTERISTICAS DE FABRICACION
              </p>
              <ul>
                <li>Diámetros de fabricación desde 600mm – 1500mm</li>
                <li>Kelly box 130 – 150 -200</li>
                <li>Modelo SHD – Super Heavy Duty</li>
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