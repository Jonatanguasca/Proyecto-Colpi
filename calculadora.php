<?php 
  $page_title = "Calculadora";
  $current_page = "servicios";

  $data =[  
    "pinon" => ["A","B","C"],
    "cadena" => [ 
      "25","35", "41", "40", "50", "60", "80", "100", "120", "140", "160", "180", "200", "240", 
      "60H", "80H", "100H", "120H", "140H", "160H", "180H", "200H", "2040", "2050", "2060", "2080",
      "2042", "2052", "2062", "2082", "03B", "04B", "05B", "06B", "08B", "10B", "12B", "16B", "20B", 
      "24B", "28B", "32B", "Bike Der", "Bike Wder", "420", "425", "428", "520", "525", "530", "630",
      "C102B", "C188", "S102B"
    ],
    "tipo" => ['Estándar','Personalizada']
  ];
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
          <div class="row">
            <h2>Datos de Entrada</h2>
          </div>
          <form id="formularioCalculadora" class="rd-form form-lg rd-mailform">
            <div class="row">
              <div class="col-sm-12 col-lg-4">
                <div class="form-wrap">
                  <label>Tipo</label>
                  <select class="form-input" id="tipo" name="tipo">
                    <option value="">...Tipo...</option>
                    <?php
                      foreach ($data["tipo"] as $tipo) {
                          echo "<option value=\"$tipo\">$tipo</option>";
                      }
                    ?>
                  </select>
                </div>
                <div class="form-wrap">
                  <label>Tipo de cadena</label>
                  <select class="form-input" id="tipoCadena" name="tipoCadena">
                    <option value="">...Tipo...</option>
                    <?php
                      foreach ($data["cadena"] as $cadena) {
                          echo "<option value=\"$cadena\">$cadena</option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-12 col-lg-4">
                <div class="form-wrap">
                  <label>Numero de hileras</label>
                  <input 
                    class="form-input"
                    id="num_hileras"
                    type="number"
                    min="1"
                    max="5"
                    value="1"
                    name="num_hileras"
                    data-constraints="@Required"
                  >
                  <div class="invalid-feedback">
                    El nombre es obligatorio.
                  </div>
                </div>
                <div class="form-wrap">
                  <label>Numero de dientes</label>
                  <input
                    class="form-input"
                    id="num_dientes"
                    type="number"
                    min="1"
                    max="150"
                    value="1"
                    name="num_dientes"
                    data-constraints="@Required"
                  >
                </div>
              </div>
              <div class="col-sm-12 col-lg-4 d-flex flex-column justify-content-between">
                <div class="form-wrap">
                  <label>Tipo de piñon</label>
                  <select class="form-input" id="tipo" type="email" name="tipo">
                    <option value="">...Tipo...</option>
                    <?php
                      foreach ($data["pinon"] as $pinon) {
                          echo "<option value=\"$pinon\">$pinon</option>";
                      }
                    ?>
                  </select>

                </div>
                <button class="button button-lg button-round button-block button-primary" type="submit">Generar plano</button>
              </div>
            </div>
          </form>
          <br>
          <div class="row">
            <h2>Datos del Piñón</h2>
          </div>
          <div class="row d-flex flex-row justify-content-between">
            <div>
              <p>Tipo de construcción</p>
              <h3>Entero 1 pieza</h3>
            </div>
            <div>
              <p>Ancho Total</p>
              <h3>18.24</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="7">
                      Piñon ref
                    </th>
                  </tr>
                  <tr>
                    <th>Dientes (Z)</th>
                    <th>Paso (P)</th>
                    <th>Diámetro Exterior (DE)</th>
                    <th>Diámetro Primitivo (DP)</th>
                    <th>Diámetro Base (DB)</th>
                    <th>Diámetro Rodillo (DR)</th>
                    <th>Ancho de diente (S)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="tDientes">12</td>
                    <td>6.350</td>
                    <td>27.509</td>
                    <td>24.535</td>
                    <td>21.233</td>
                    <td>21.233</td>
                    <td>2.718</td>
                  </tr>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary">Descargar plano</button>
            </div>
            <div class="col-md-12 col-lg-4">
              <p>Vista previa</p>
              <div style="height: 100%;">
                <canvas id="canvasPlano" style="border:1px solid #000000;height: 100%; width: 100%;">
                  Your browser does not support the HTML5 canvas tag.
                </canvas>
              </div>
            </div>
          </div>
              <!-- <div class="form-wrap">
                <label>1.Selecciona el material</label>
                <select class="form-input" id="material" type="email" name="material">
                  <option>...Material...</option>
                  <option>Acero</option>
                  <option>Plastico</option>
                </select>

              </div> -->
          </div>
        </div>
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
    <script src="js/funciones.js"></script>
  </body>
</html>