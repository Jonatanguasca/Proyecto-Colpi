<?php 
  $page_title = "Calculadora";
  $current_page = "servicios";
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <?php include 'partials/layout/head.php'; ?>
    <script src="js/funciones.js"></script>
  </head>
  <body>
    <?php include 'partials/preloader.php'; ?>

    <div class="page">
      <?php include 'partials/layout/header.php'; ?>
      <!-- Breadcrumbs -->
      <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>Calculadora</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li class="active">Calculadora</li>
          </ul>
        </div>
      </section>

      <!-- Single service-->
      <section class="section section-lg bg-white">
        <div class="container">
          <div class="row row-40 justify-content-center">
            <div class="col-md-6 col-lg-4">
              <form class="rd-form form-lg rd-mailform">
                <div class="form-wrap">
                  <label>1.Selecciona el material</label>
                  <select class="form-input" id="material" type="email" name="material">
                    <option>...Material...</option>
                    <option>Acero</option>
                    <option>Plastico</option>
                  </select>

                </div>
                <div class="form-wrap">
                  <label>2.Selecciona el tipo</label>
                  <select class="form-input" id="tipo" type="email" name="tipo" onchange="cambiaImagen()">
                    <option>...Tipo...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>

                </div>
                <div class="form-wrap">
                  <label>3.Ingresa el Numero de hileras</label>
                  <input class="form-input" id="num_hileras" type="number" min="1" max="5" step="1" value="1"
                    name="num_hileras" data-constraints="@Required" onblur="cambiaImagen()">
                  <label class="form-label" for="num_hileras">Num hileras</label>

                </div>
                <div class="form-wrap">
                  <label>4.Ingresa el Numero de dientes</label>
                  <input class="form-input" id="num_dientes" type="number" min="1" max="5" step="1" value="1"
                    name="num_dientes" data-constraints="@Required">
                  <label class="form-label" for="num_dientes">Num Dientes</label>

                </div>
                <div class="form-wrap">
                  <label>5.Selecciona el paso</label>
                  <select class="form-input" id="login-email" type="email" name="email">
                    <option>...Paso...</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                  </select>

                </div>

                <button class="button button-lg button-round button-block button-primary" type="button">Generar plano</button>
              </form>
            </div>

            <div class="col-md-12 col-lg-8">
              <h3>Vista previa</h3>
              <div style="height: 80%;">
                <canvas id="canvasPlano" style="border:1px solid #000000;height: 100%; width: 100%;">
                  Your browser does not support the HTML5 canvas tag.
                </canvas>
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