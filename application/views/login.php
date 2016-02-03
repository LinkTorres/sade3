<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>DROMOS</title>
  <meta name="keywords" content="" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url();?>media/assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->

   <style type="text/css">
   .parsley-required{
    color:#FF0000 !important;
   }

   </style>
</head>

<body class="external-page sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-info" id="login1">

          <div class="row mb15 table-layout">

            <div class="col-xs-6 va-m pln">
              <a href="dashboard.html" title="Return to Dashboard">
                <img href="<?php echo base_url();?>media/assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
              <div class="login-links">
                <a href="pages_login.html" class="active" title="Sign In">Entrar</a>
                <span class="text-white"> | </span>
                <a href="pages_register.html" class="" title="Register">Regístrate</a>
              </div>

            </div>

          </div>

          <div class="panel panel-info mt10 br-n">

            <div class="panel-heading heading-border bg-white">
              <span class="panel-title hidden">
                <i class="fa fa-sign-in"></i>Registro</span>
              <div class="section row mn">
                <div class="col-sm-12">
                  <a href="#" class="button btn-social facebook span-left text-center mr5 btn-block">
                      INGRESA POR FAVOR TUS CREDENCIALES
                  </a>
                </div>
              </div>
            </div>

            <!-- end .form-header section -->
            <form id="login-form" data-parsley-validate action="<?php echo base_url();?>principal/valida_usuario" method="post">
              <div class="panel-body bg-light p30">
                <div class="row">
                  <div class="col-xs-12 col-md-8 col-md-offset-2 pr30">

                    <div class="section">
                      <label for="username" class="field-label text-muted fs18 mb10">Usuario</label>
                      <label for="username" class="field prepend-icon">
                        <input type="text" name="nombreUsuario" id="username" class="gui-input" required placeholder="Ingresa tu usuario">
                        <label for="username" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="username" class="field-label text-muted fs18 mb10">Contraseña</label>
                      <label for="password" class="field prepend-icon">
                        <input type="password" name="contrasena" id="password" class="gui-input" required placeholder="Ingresa tu contraseña">
                        <label for="password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                  </div>
                </div>
              </div>

              <div class="row">
                                <div class="col-xs-12">
                                    <div id="responseLogin" class="alert text-center hidden"></div>
                                    <div id="buttonLoading" class="hidden">
                                        <div class="btn-block alert alert-success">
                                              <center><strong>ESPERE...</strong></center>
                                         </div>
                                    </div>
                                </div>
              </div>

              <!-- end .form-body section -->
              <div class="panel-footer clearfix p10 ph15">
                <button type="submit" class="button btn-primary mr10 pull-right">Entrar</button>
              
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
   <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js">
  </script>
  <script src="<?php echo base_url();?>media/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="<?php echo base_url();?>media/vendor/plugins/canvasbg/canvasbg.js"></script>
  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>media/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/demo/demo.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/main.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/jquery.form.min.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/dist/parsley.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/custom.js"></script> 




  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    // Init Theme Core      
    Core.init();
    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });

  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
