<?php 
  $page_title = "Mecanizados pesados - Colpiñones";
  $current_page = "servicios";
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
    <section class="section section-bredcrumbs" style="background-image: url(images/mecanizados.jpg); background-repeat:no-repeat; background-size: 100%;">
      <div class="container context-dark breadcrumb-wrapper" >
        <h1>Mecanizados Pesados</h1>
        <ul class="breadcrumbs-custom">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li class="active">Mecanizados pesados</li>
        </ul>
      </div>
    </section>
    <!-- Overview-->
    <section class="section section-lg bg-default">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <div class="post-single-wrap">
              <div class="post-item">
                <h2>Servicio de mecanizado</h2>
                
                <div class="subtitle heading-6 justificado">En nuestra fábrica contamos con maquinaria capaz de mecanizar piezas de hasta 3 metros de diámetro y 4 metros de longitud.</div>


              </div>

              
            </div>
          </div>
          <div class="owl-carousel text-left" data-items="1" data-md-items="3" data-dots="true" data-nav="false"
                data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                <blockquote class="quote quote-boxed">
                  <div class="quote-meta">
                      <img class="img-bordered" src="images/DSC00507.JPG" alt="" width="1170" height="456">
                    <div class="time">Piñon 1</div>
                  </div>
                  <q>para maquinas 1</q>
                  
                </blockquote>
                <blockquote class="quote quote-boxed">
                    <div class="quote-meta">
                        <img class="img-bordered" src="images/DSC00869.JPG" alt="" width="1170" height="456">
                      <div class="time">piñon 2</div>
                    </div>
                    <q>para maquinas 2</q>
                    
                </blockquote>
                <blockquote class="quote quote-boxed">
                    <div class="quote-meta">
                        <img class="img-bordered" src="images/page1_img4.JPG" alt="" width="1170" height="456">
                      <div class="time">3 </div>
                    </div>
                    <q>3</q>
                    

                </blockquote>
                
                <blockquote class="quote quote-boxed">
                    <div class="quote-meta">
                        <img class="img-bordered" src="images/DSC00869.JPG" alt="" width="1170" height="456">
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