<?php 
  $page_title = "Login/Registration";
  $current_page = "inicio";
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
        <div class="container context-dark breadcrumb-wrapper" style="display: none;">
          <h1>Contactanos</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Contactanos</li>
          </ul>
        </div>
      </section>
      <section class="section one-screen-page bg-primary-dark">
        <div class="one-screen-page-inner">
          <div class="page-content text-center">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-10 col-lg-8 col-xl-4">
                          <!-- Tabs-->
                          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                              <!-- Nav tabs-->
                              <ul class="nav nav-tabs nav-tabs-inline">
                                  <li class="nav-item" role="presentation"><a class="nav-link active"
                                          href="#tabs-1-1" data-toggle="tab">Login</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                          data-toggle="tab">Registration</a></li>
                              </ul>
                              <!-- Tab panes-->
                              <div class="tab-content">
                                  <div class="tab-pane fade show active" id="tabs-1-1">
                                      <h3>Login</h3>
                                      <!-- RD Mailform-->
                                      <form class="rd-form form-lg rd-mailform">
                                          <div class="form-wrap">
                                              <input class="form-input" id="login-email" type="email" name="email"
                                                  data-constraints="@Email @Required">
                                              <label class="form-label" for="login-email">E-mail</label>
                                          </div>
                                          <div class="form-wrap">
                                              <input class="form-input" id="login-password" type="password"
                                                  name="password" data-constraints="@Required">
                                              <label class="form-label" for="login-password">Password</label>
                                          </div>
                                          <button
                                              class="button button-lg button-round button-block button-primary"
                                              type="submit">Log In</button>
                                      </form>
                                      <div class="group-sm group-sm-justify group-middle social-items"><span>or
                                              use</span><a
                                              class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook"
                                              href="#"></a><a
                                              class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter"
                                              href="#"></a></div>
                                  </div>
                                  <div class="tab-pane fade" id="tabs-1-2">
                                      <h3>Registration</h3>
                                      <!-- RD Mailform-->
                                      <form class="rd-form form-lg rd-mailform">
                                          <div class="form-wrap">
                                              <input class="form-input" id="register-name" type="text"
                                                  name="username" data-constraints="@Required">
                                              <label class="form-label" for="register-name">Username</label>
                                          </div>
                                          <div class="form-wrap">
                                              <input class="form-input" id="register-email" type="email"
                                                  name="email" data-constraints="@Email @Required">
                                              <label class="form-label" for="register-email">E-mail</label>
                                          </div>
                                          <div class="form-wrap">
                                              <input class="form-input" id="register-password" type="password"
                                                  name="password" data-constraints="@Required">
                                              <label class="form-label" for="register-password">Password</label>
                                          </div>
                                          <div class="form-wrap">
                                              <input class="form-input" id="register-confirm-password"
                                                  type="password" name="confirm-password"
                                                  data-constraints="@Required">
                                              <label class="form-label" for="register-confirm-password">Confirm
                                                  Password</label>
                                          </div>
                                          <button
                                              class="button button-lg button-round button-block button-primary"
                                              type="submit">Register</button>
                                      </form>
                                      <div class="group-sm group-sm-justify group-middle social-items"><span>or
                                              use</span><a
                                              class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook"
                                              href="#"></a><a
                                              class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter"
                                              href="#"></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php include 'partials/layout/footer.php'; ?>
        </div>
      </section>
    </div>
    <?php include 'partials/scripts.php'; ?>
  </body>
</html>