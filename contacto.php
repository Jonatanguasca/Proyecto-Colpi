<?php 
  $page_title = "Contacto - Colpiñones";
  $current_page = "contacto";
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
          <h1>Contactanos</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Contactanos</li>
          </ul>
        </div>
      </section>
      <br>
      <section class="container">
        <h4>Contáctanos</h4>
        <form 
          class="rd-form rd-mailform"
          data-form-output="form-output-global"
          data-form-type="contact" method="post"
          action="bat/rd-mailform.php"
          novalidate="novalidate"
        >
        <div class="row justify-centerrow justify-content-center align-items-center minh-100">
          <div class="col-lg-6">
            <!-- RD Mailform-->
            <div class="form-wrap">
              <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name"
                data-constraints="@Required"><span class="form-validation"></span>
              <label class="form-label rd-input-label" for="contact-name">Nombre</label>
            </div>
            <div class="form-wrap">
              <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email"
                data-constraints="@Email @Required"><span class="form-validation"></span>
              <label class="form-label rd-input-label" for="contact-email">Correo electrónico</label>
            </div>
            <div class="form-wrap">
              <label class="form-label rd-input-label" for="contact-message">Cuéntanos qué quieres saber.... </label>
              <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message"
                name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-wrap">
              <input class="form-input form-control-has-validation" id="contact-phone" type="tel" name="phone"
              data-constraints="@Required"><span class="form-validation"></span>
              <label class="form-label rd-input-label" for="contact-phone">Telefono</label>
            </div>
            <div class="form-wrap">
              <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email"
                data-constraints="@Email @Required"><span class="form-validation"></span>
              <label class="form-label rd-input-label" for="contact-email">Correo de cotizacion</label>
            </div>
            <div class="form-wrap">
              <label class="form-label rd-input-label" for="address">Dirección</label>
              <input class="form-input form-control-has-validation" id="address" type="text" name="address"
                data-constraints="@Required"><span class="form-validation"></span>
            </div>
          </div>
        </div>
        <button class="button button-primary" type="submit">Enviar</button>
        </form>
      </section>
      <br>
      <section class="section section-lg">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15907.437913936776!2d-74.0797584!3d4.619147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e960cc91f27caa2!2sCOLPI%C3%91ONES!5e0!3m2!1ses!2sco!4v1573158273319!5m2!1ses!2sco"
          width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </section>
      <br>
      <?php include 'partials/layout/footer.php'; ?>
    </div>
    <!-- PANEL-->
    <div class="layout-panel-wrap">
      <div class="layout-panel">
        <button class="layout-panel-toggle" data-custom-toggle=".layout-panel-wrap"><span></span></button>
        <div class="layout-panel-content scroll-wrap">
          <div class="layout-panel-inner">
            <div class="layout-panel-header"><a class="button button-primary button-icon button-icon-left" href="#get-template"><span class="icon mdi mdi-cart-outline"></span>Buy template</a>
              <div class="layout-panel-element"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-200x45.png" alt="" width="200" height="45"/><img class="brand-logo-light" src="images/logo-200x45.png" alt="" width="200" height="45"/></a>
              </div>
            </div>
            <div class="layout-panel-controls">
              <div class="layout-panel-row">
                <p>Wide / Boxed Layout </p>
                <label>
                  <input class="toggle-custom layout-toggle" name="page-boxed-toggle" value="toggle-1" type="checkbox">
                </label>
              </div>
              <div class="layout-panel-row">
                <p>Choose Color Scheme</p>
                <div class="theme-switcher-group">
                  <button class="theme-switcher-group-item" data-theme-name="default">Default</button>
                  <button class="theme-switcher-group-item" data-theme-name="style-1">Style 1</button>
                </div>
              </div>
              <div class="layout-panel-row layout-panel-row-button-wrap">
                <button class="button button-gray-100" data-theme-reset="">Reset </button>
              </div>
            </div>
            <!-- Isotope -->
            <div class="layout-panel-isotope-wrap">
              <div class="isotope-filters">
                <ul class="isotope-filters-list">
                  <li><a class="active" data-isotope-filter="*" data-isotope-group="layouts" href="#">All</a></li>
                  <li><a data-isotope-filter="templates" data-isotope-group="layouts" href="#">Templates</a></li>
                  <li><a data-isotope-filter="headers" data-isotope-group="layouts" href="#">Headers</a></li>
                  <li><a data-isotope-filter="footers" data-isotope-group="layouts" href="#">Footers</a></li>
                </ul>
              </div>
              <!-- Isotope Content -->
              <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="layouts">
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-creative.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Creative</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-classic.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Classic</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-modern.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Modern</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-variant-4.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Variant 4</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-variant-5.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Variant 5</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-variant-6.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Variant 6</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-variant-7.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Variant 7</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="templates"><a class="thumbnail-small" href="home-variant-8.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Variant 8</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="headers"><a class="thumbnail-small" href="header-minimal.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Header Minimal</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="headers"><a class="thumbnail-small" href="header-fullwidth.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Header Fullwidth</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="headers"><a class="thumbnail-small" href="header-sidebar.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Header Sidebar</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="footers"><a class="thumbnail-small" href="footer-centered.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Footer Centered</p>
                        </div></a>
                </div>
                <div class="isotope-item" data-filter="footers"><a class="thumbnail-small" href="footer-minimal.php">
                        <div class="thumbnail-small-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-hover-image"><img src="images/layout-panel/trunk-layout-panel-placeholder-380x280.jpg" alt="" width="380" height="280"></div>
                        <div class="thumbnail-small-caption">
                          <p class="thumbnail-small-header">Footer Minimal</p>
                        </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>