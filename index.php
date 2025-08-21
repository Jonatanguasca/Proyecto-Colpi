<?php 
  $page_title = "Inicio - Colpiñones";
  $current_page = "inicio";
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
    <?php include 'partials/slider.php'; ?>
        <!-- Advantages-->
    <section class="section cards context-dark">
      <div class="row row-flex d-flex justify-content-around no-gutters ">
        <div class="col-md-6 col-lg-3">
          <div class="blurb-boxed-2">
            <div class="icon icon fa fa-globe"></div>
            <h6 class="title"><span class="font-weight-bold">Elementos de Transmisión de Potencia</span> </h6>
            <p class="exeption">
              Verifica las medidas del piñón de cadena que mas convenga para tu proyecto y descárgalo!
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blurb-boxed-2">
            <div class="icon icon fa fa-cog"></div>
            <h6 class="title"><span class="font-weight-bold">Engranajes</span> </h6>
            <p class="exeption">
              Nuestro conocimiento en fabricación de diferentes tipos de engranajes, se ha plasmado en un software capaz de mostrar precisión y eficiencia al momento de fabricar.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blurb-boxed-2 ">
            <div class="icon building fa-building "></div>
            <h6 class="title"><span class="font-weight-bold">Área de soldadura </span> </h6>
            <p class="exeption">Texto correspondiente</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    
    
    <?php include 'partials/cta.php'; ?>
    <?php include 'partials/mapa.php'; ?>
    <?php include 'partials/layout/footer.php'; ?>
  </div>
  <?php include 'partials/scripts.php'; ?>
</body>
</html>