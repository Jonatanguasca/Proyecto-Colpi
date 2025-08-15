<?php 
  $page_title = "Sectores Industriales";
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
          <h1>Sectores industriales</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sectores.php">Sectores industriales</a></li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="owl-carousel text-left" data-items="1" data-md-items="3" data-dots="true" data-nav="false"
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


            </div>
          </div>
        </div>
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>