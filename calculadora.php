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
            <div class="col-md-4 col-lg-4">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="3">
                      Piñon ref
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Dientes</td>
                    <td>Z</td>
                    <td id="tDientes">12</td>
                  </tr>
                  <tr>
                    <td>Paso</td>
                    <td>P</td>
                    <td>6.350</td>
                  </tr>
                  <tr>
                    <td>Diámetro Exterior</td>
                    <td>DE</td>
                    <td>27.509</td>
                  </tr>
                  <tr>
                    <td>Diámetro Primitivo</td>
                    <td>DP</td>
                    <td>24.535</td>
                  </tr>
                  <tr>
                    <td>Diámetro Base</td>
                    <td>DB</td>
                    <td>21.233</td>
                  </tr>
                  <tr>
                    <td>Ancho de diente</td>
                    <td>s</td>
                    <td>2.718</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-4 col-lg-4">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="3">
                      Piñon ref
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Numero de Hileras</td>
                    <td>F</td>
                    <td>2 Hileras</td>
                  </tr>
                  <tr>
                    <td>Ancho Total Hileras</td>
                    <td>St</td>
                    <td>9.119</td>
                  </tr>
                  <tr>
                    <td>Espacio entre Hileras</td>
                    <td>B</td>
                    <td>3.683</td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      Datos de Cadena
                    </td>
                  </tr>
                  <tr>
                    <td>Diámetro de Rodillo</td>
                    <td>Ro</td>
                    <td>3.302</td>
                  </tr>
                  <tr>
                    <td>Distancia entre Caras</td>
                    <td>W</td>
                    <td>3.175</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-4 col-lg-4">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Diametro manzana</td>
                    <td>Dm</td>
                    <td>0 mm</td>
                  </tr>
                  <tr>
                    <td>Altura manzana</td>
                    <td>Hm</td>
                    <td>9.12 mm</td>
                  </tr>
                  <tr>
                    <td>Perimetro manzana</td>
                    <td>Pm</td>
                    <td>0.0 mm</td>
                  </tr>
                  <tr>
                    <td>Peso manzana</td>
                    <td>Wm</td>
                    <td>0.00 kg</td>
                  </tr>
                  <tr>
                    <td>Diametro disco</td>
                    <td>DE</td>
                    <td>27.5 mm</td>
                  </tr>
                  <tr>
                    <td>Ancho disco</td>
                    <td>s</td>
                    <td>9.12 mm</td>
                  </tr>
                  <tr>
                    <td>Peso disco</td>
                    <td>WD</td>
                    <td>0.04 Kg</td>
                  </tr>
                </tbody>
              </table>
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
          <div class="row">
            <h2>Vista previa</h2>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div style="height: 80%;">
                <canvas id="canvasPlano" style="border:1px solid #000000;height: 100%; width: 100%;">
                  Your browser does not support the HTML5 canvas tag.
                </canvas>
              </div>
            </div>
          </div>
          </div>
        </div>
            
      </section>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
    <script src="js/funciones.js"></script>
  </body>
</html>