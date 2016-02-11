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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/assets/admin-tools/admin-forms/css/admin-forms.min.css">

  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Datatables Editor Addon CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css">

  <!-- Datatables ColReorder Addon CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/parsley.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/select2/css/core.css">

  <!-- DatePicker -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css">


  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url();?>media/assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="dashboard-page">
  <!-- Start: Main -->
  <div id="main">

    <!--
       ".navbar" Helper Classes:
       * Positioning Classes:
        '.navbar-static-top' - Static top positioned navbar
        '.navbar-static-top' - Fixed top positioned navbar

       * Available Skin Classes:
         .bg-dark    .bg-primary   .bg-success
         .bg-info    .bg-warning   .bg-danger
         .bg-alert   .bg-system
      Example: <header class="navbar navbar-fixed-top bg-primary">
      Results: Fixed top navbar with blue background
       -->
    <header class="navbar navbar-fixed-top navbar-shadow bg-system">
      <div class="navbar-branding">
        <a class="navbar-brand" href="<?= base_url()."principal/" ?>">
          <b>DROMOS</b>Admin
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="fa fa-bell-o fs14 va-m"></span>
              <span class="badge badge-danger">9</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
              <div class="panel mbn">
                  <div class="panel-menu">
                     <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                     <span class="panel-title fw600"> Recent Activity</span>
                     <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                      <ol class="timeline-list">
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added to his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-system">
                            <span class="fa fa-fire"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added to his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                      </ol>

                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>

        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <?php if(get_instance()->session->userdata("user_logeado")): ?>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
            <img src="<?php echo base_url();?>media/assets/img/avatars/5.jpg" alt="avatar" class="mw30 br64">
            <span class="hidden-xs pl15"> <?= get_instance()->session->userdata("user_perfil")->nombreUsuario ?></span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">

            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span>  Mensajes
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-bell"></span> Notificaciones </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Ajustes </a>
            </li>
            <li class="dropdown-footer">
              <a href="<?php echo base_url();?>principal/cerrarSesion" class="">
              <span class="fa fa-power-off pr5"></span> Cerrar sesión </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </header>
    <!-- End: Header -->

    <!--
       "#sidebar_left" Helper Classes:
       * Positioning Classes:
        '.affix' - Sets Sidebar Left to the fixed position

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light
         .sidebar-light.light

       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background


        Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="<?php echo base_url();?>media/assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="<?php echo base_url();?>principal/cerrarSesion">Salir</a>
                </div>
                <div class="media-author"><?= get_instance()->session->userdata("user_perfil")->nombreUsuario ?></div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Menu (slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">Catálogos</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Dirección
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/direcciones">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevaDireccion">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Área
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/areas">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevaArea">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Departamento
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/departamentos">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevoDepartamento">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Puestos
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/puestos">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevoPuesto">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Ubicaciones
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/ubicaciones">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevaUbicacion">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Posiciones
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/posiciones">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevaPosicion">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Régimen
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/regimenes">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevoRegimen">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Túrno
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/turnos">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevoTurno">Agregar </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-book"></span>Colaboradores
                   <span class="caret"></span>
                </a>
                 <ul class="nav sub-nav">
                  <li>
                    <a href="<?php echo base_url();?>principal/colaboradores">Ver Todas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>principal/nuevoColaborador">Agregar </a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title">Reportes</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?=base_url() . "reportes/puestos" ?>">
                  <span class="glyphicon glyphicon-book"></span>Puestos</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/altas" ?>">
                  <span class="glyphicon glyphicon-modal-window"></span>Altas</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/bajas" ?>">
                  <span class="glyphicon glyphicon-modal-window"></span>Bajas</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/transferencias" ?>">
                  <span class="glyphicon glyphicon-equalizer"></span>Transferencias</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/vacantes" ?>">
                  <span class="glyphicon glyphicon-equalizer"></span>Vacantes</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/turnos" ?>">
                  <span class="glyphicon glyphicon-equalizer"></span>Turnos</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/regimen" ?>">
                  <span class="glyphicon glyphicon-equalizer"></span>Régimen</a>
              </li>
              <li>
                <a href="<?=base_url() . "reportes/plantillaGeneral" ?>">
                  <span class="glyphicon glyphicon-equalizer"></span>Plantilla General</a>
              </li>

            </ul>
          </li>

        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
