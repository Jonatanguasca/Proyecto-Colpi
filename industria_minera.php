<?php 
  $page_title = "Industria Minera - Colpiñones";
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
      <section class="section section-bredcrumbs" style="--bg-image: url(../images/estructuras.jpg)">
        <div class="container context-dark breadcrumb-wrapper" >
          <h1>Industria Minera</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Areas de actividad</a></li>
            <li class="active">Industria minera</li>
          </ul>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8">                
                  <div class="subtitle heading-5">Puede resultar compleja la construcción de piezas ya diseñadas, pero gracias al conocmiento de nuestro equipo de trabajo, podemos ayudarte a lograr un despiece simple y confiable, elegir los materiales adecuados o simplemente seguir las instrucciones de fabricación.</div>
            </div>
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