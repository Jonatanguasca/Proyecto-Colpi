<?php 
  $page_title = "Servicios - Colpiñones";
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
      <!-- Page Header-->
      <?php include 'partials/layout/header.php'; ?>
      <!-- Breadcrumbs -->
      <section 
        class="section section-bredcrumbs"
        style="--bg-image: url(../images/servicios.jpg);"
      >
        <div class="container context-dark breadcrumb-wrapper" >
          <h1>Servicios</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li class="active"> <a href="servicios.php">Servicios </a></li>
          </ul>
        </div>
      </section>
      <!-- A Wide Range of Banking & Financial Services-->
      <section class="section section-lg">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-12 col-xl-10">
              <h2>Tenemos una amplia gama de servicios para cubrir su necesidad</h2>
              <div class="heading-6 block-lg">creamos piezas a medida para su proyecto.</div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="service-list">
            <div class="row row-20 service-item">
              <div class="col-md-6"><img src="images/piñon_de_cadena.jpg" alt="" width="540" height="327"/>
              </div>
              <div class="col-md-6">
                <h3 class="title">Transmisión de potencia</h3>
                <p class="exeption">En nuestra planta de producción contamos con equipos convencionales y CNC, como generadoras, mandrinadora y centro de mecanizado, que nos permite mecanizar piezas de hasta 3m de diametro y 4m de longitud..</p><a class="button button-lg button-primary" href="potencia.php">Ver más</a>
              </div>
            </div>
            <div class="row row-20 service-item">
              <div class="col-md-6"><img src="images/DSC00509.JPG" alt="" width="540" height="327"/>
              </div>
              <div class="col-md-6">
                <h3 class="title">Mecanizados pesados</h3>
                <p class="exeption">Nuestra maquinaria ha sido seleccionada para lograr mecanizados de piezas de grandes dimensiones, en tamaño y peso.
                  <ul class="list-marked">
                    <li>Torno: 3mt de volteo - 4mt entre puntos</li>
                    <li>Generadora: Diametro 3mt – hasta módulo 25</li>
                    <li>Mandrinadora: hasta 5ton de peso</li>
                    <li>Centro de mecanizado Vertical: 2000mm x 1000mm x 700mm</li>

                    
                  </ul> 
                </p><a class="button button-lg button-primary" href="mecanizados.php">Ver más</a>
              </div>
            </div>
            <div class="row row-20 service-item">
              <div class="col-md-6"><img src="images/DSC01506.JPG" alt="" width="540" height="327"/>
              </div>
              <div class="col-md-6">
                <h3 class="title">Estructuras metálicas.</h3>
                <p class="exeption">Contamos con un equipo de soldadores calificados que son designados según su destreza para cada tarea en la construcción de estructuras, logrando asi tiempos de producción cortos y alta calidad. <br> 
                  Etapa 0 - Diseño y análisis<br>
                  Etapa 1 - Corte<br>
                  Etapa 2 - Pre ensamble<br>
                  Etapa3-Ensamble<br>
                  </p><a class="button button-lg button-primary" href="estructuras.php">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>