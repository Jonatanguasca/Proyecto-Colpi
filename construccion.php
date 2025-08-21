<?php 
  $page_title = "Construccion y cimentación- Colpiñones";
  $current_page = "areas";
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <?php include 'partials/layout/head.php'; ?>
    <link rel="stylesheet" href="css/construccion.css">
  </head>

  <body>
    <?php include 'partials/preloader.php'; ?>

    <div class="page">
      <?php include 'partials/layout/header.php'; ?>
      <!-- Breadcrumbs -->
      <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper" >
          <h1>CIMENTACIÓN & CONSTRUCCIÓN</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
            <li class="active"><a href="construccion.php">Cimentación y construcción</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5">  
              <video
                style="&:focus {outline: none;}"
                src="./videos/video.mp4"
                autoplay
                muted
                playsinline
                loop
                preload="auto"
                width="100%"
              >
                Tu navegador no soporta video HTML5.
              </video>             
                <!-- <video  src="./videos/video.mp4" title="presentacion piñones" autoplay loop mute></video> -->
            </div>
            <div class="col-sm-12 col-xl-7 principal_content">                
              <p class="subtitle heading-3">Diseños y fabricaciones especiales tipo liviano o tipo pesado, según la necesidad de la obra.</p>
              <ul>
                <li><a href="baldes.php">Baldes</a></li>
                <li><a href="brocas.php">Brocas</a></li>
                <li><a href="cfa.php">CFA (Tornillo continuo)</a></li>
                <li><a href="cucharas.php">Tanques – Cucharas</a></li>
                <li><a href="tuberia.php">Tuberia Tremie</a></li>
              </ul>
            </div>
            <!-- <div class="owl-carousel text-left" data-items="1" data-md-items="3" data-dots="true" data-nav="false"
                  data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                  <blockquote class="quote quote-boxed">
                    <div class="quote-meta">
                        <img class="img-bordered" src="images/100_4309.JPG" alt="" width="1170" height="456">
                      <div class="time">Piñon 1</div>
                    </div>
                    <q>para maquinas 1</q>
                    
                  </blockquote>
                  <blockquote class="quote quote-boxed">
                      <div class="quote-meta">
                          <img class="img-bordered" src="images/Centrifuga.JPG" alt="" width="1170" height="456">
                        <div class="time">piñon 2</div>
                      </div>
                      <q>para maquinas 2</q>
                      
                  </blockquote>
                  <blockquote class="quote quote-boxed">
                      <div class="quote-meta">
                          <img class="img-bordered" src="images/DSC00506.JPG" alt="" width="1170" height="456">
                        <div class="time">3 </div>
                      </div>
                      <q>3</q>
                  </blockquote>
                  <blockquote class="quote quote-boxed">
                      <div class="quote-meta">
                          <img class="img-bordered" src="images/DSC01506.JPG" alt="" width="1170" height="456">
                        <div class="time">engranaje 4</div>
                      </div>
                      <q>a mediad</q>
                      

                  </blockquote>


            </div> -->
          </div>
        </div>
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>