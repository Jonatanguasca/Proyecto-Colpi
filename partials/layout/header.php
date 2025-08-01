<?php 
  function selected($page_name)
  {
    global $current_page;
    echo ($current_page === $page_name) ? 'active' : '';
  }
?>
<!-- Page Header-->
<header class="section page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap rd-navbar-absolute">
    <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
      data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
      data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
      data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px"
      data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true"
    >
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
              <a class="brand" href="index.php">
                <img class="brand-logo-dark" src="images/logo-200x45_1.png" alt="" width="250" height="45" />
                <img class="brand-logo-light" src="images/logo-200x45_1.png" alt="" width="250" height="45" />
              </a>
            </div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item <?php selected("inicio") ?>">
                  <a class="rd-nav-link" href="index.php">Inicio</a>
                </li>
                <li class="rd-nav-item <?php selected("servicios") ?>">
                  <a class="rd-nav-link" href="servicios.php">Productos y Servicios</a>
                  <!-- RD Navbar Dropdown-->
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="potencia.php">
                        <u>Transmisión de potencia</u>
                      </a>
                    </li>
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="mecanizados.php">
                        <u>Mecanizados pesados</u>
                      </a>
                    </li>
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="estructuras.php">
                        <u>Estructuras metálicas</u>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="rd-nav-item <?php selected("areas") ?>"><a class="rd-nav-link" href="index.php">Sectores de Industriales</a>
                  <!-- RD Navbar Dropdown-->
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="industria_minera.php">
                        <u>Industria minera</u> 
                      </a>
                    </li>
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="construccion.php">
                        <u>Construcción y cimentación</u>
                      </a>
                    </li>
                    <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="seguridad.php">
                        <u>Astillero naval y seguridad industrial</u>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="#">Acerca de Colpiñones</a> -->
                  <!-- RD Navbar Dropdown
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-post.php">Single post</a>
                    </li>
                  </ul>-->
                <!-- </li> -->
                <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                    <!-- RD Navbar Dropdown ->
                    <ul class="rd-menu rd-navbar-dropdown">
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="404.php">404 Page</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="503.php">503 Page</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="coming-soon.php">Coming soon</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="login.php">Login/Registration</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.php">Privacy policy</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="search-results.php">Search results</a></li>
                    </ul>
                  </li> -->
                <li class="rd-nav-item <?php selected("contacto") ?>"><a class="rd-nav-link" href="contacto.php">Contacto</a>
                </li>
              </ul>
            </div>

            <!-- RD Navbar Search-->
            <div class="rd-navbar-search">
              <button class="rd-navbar-search-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-search">
                <span></span>
              </button>
              <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                <div class="form-wrap">
                  <label class="form-label" for="rd-navbar-search-form-input">
                    Buscar
                  </label>
                  <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                  <div class="rd-search-results-live" id="rd-search-results-live">
                  </div>
                </div>
                <button class="rd-search-form-submit mdi mdi-magnify" type="submit">
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>