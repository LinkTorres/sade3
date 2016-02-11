<style type="text/css">

        .activar_comentario.active {
            display: none;
        }

        .activar_comentario span:nth-of-type(1)  {
            display: none;
        }
        .activar_comentario span:last-child  {
            display: block;
        }

        .activar_comentario.active  span:nth-of-type(1)  {
            display: block;
        }
        .activar_comentario.active span:last-child  {
            display: none;
        }

    </style>


      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="<?= base_url() . "principal/" ?>">DROMOS</a>
            </li>
            <li class="crumb-icon">
              <a href="<?= base_url() . "principal/colaboradores" ?>">
                REGRESAR &nbsp; <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>

          </ol>
        </div>

      </header>
      <!-- End: Topbar -->


<style type="text/css">
.panel-controls{display: none;}</style>
      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- Admin-panels -->
          <div class="admin-panels fade-onload">
            <div class="row">
              <!-- Three Pane Widget -->
              <div class="col-md-12 admin-grid">


                  	<div class="tab-content">
                  		<div class="col-md-12">
			              <div class="panel panel-visible" id="spy5">
			                <div class="panel-heading">
			                  <div class="panel-title hidden-xs">
			                    <span class="glyphicon glyphicon-tasks"></span>Agregar Colaborador</div>
			                </div>

			                <div class="panel-body pn">
                        <h5 class="text-center">Ingresa la información</h5>
			                  <form id="agregarForm" data-parsley-validate action="<?php echo base_url();?>principal/SAddColaborador" method="post" role="form">

                             <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">No.Empleado</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="number" name="numEmpleado" value="" class="form-control input-sm" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Contraseña</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="password" name="contrasena" value="" class="form-control input-sm" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Jefe</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="select2 form-control" name="jefeNumEmpleado">
                                          <option selected="selected" value="">Selecciona</option>
                                          <?php foreach($colaboradores as $item): ?>
                                          <option value="<?= $item->numEmpleado ?>"><?= $item->numEmpleado . " " . $item->nombre ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Estatus</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="estatus">
                                          <option selected="selected" value="">Selecciona</option>
                                          <option value="0">INACTIVO</option>
                                          <option value="1">ACTIVO</option>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Nombre</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="nombre" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Apellido Paterno</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="apellidoPaterno" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Apellido Materno</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="apellidoMaterno" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Sexo</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="sexo">
                                          <option selected="selected" value="">Selecciona</option>
                                          <option value="0">FEMENINO</option>
                                          <option value="1">MASCULINO</option>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Curp</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="curp" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Rfc</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="rfc" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">NSS</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="NSS" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Direccion</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="Direccion" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Colonia</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="Colonia" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">CP</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="CP" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Municipio</label>
                                 <div class="col-xs-6 ">
                                  <div class="form-group">
                                        <select class="select2 form-control" name="Municipio_idMunicipio">
                                            <option selected="selected" value="">Selecciona</option>
                                            <?php foreach($municipios as $item): ?>
                                            <option value="<?= $item->idMunicipio ?>"><?= $item->nombre ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                  </div>
                                 </div>
                            </div>


                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Fecha Nacimiento</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="fechaNac" value="" class="form-control input-sm datepicker" data-date-format="yyyy-mm-dd" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Telefono Casa</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="TelCasa" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Telefono Celular</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="TelCelular" value="" class="form-control input-sm"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Escolaridad</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="Escolaridad_idEscolaridad">
                                         <option selected="selected" value="">Selecciona</option>
                                          <?php foreach($escolaridades as $item): ?>
                                          <option value="<?= $item->idEscolaridad ?>"><?= $item->descripcion ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div id="nuevaPosicion"  class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Posicion</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select required class="form-control" id="inputNuevaPosicion" name="nuevaPosicion">
                                           <option selected="selected"  value="">Selecciona</option>
                                          <?php foreach($freePosiciones as $posicion): ?>
                                          <option value="<?= $posicion->clave_posicion ?>"><?= $posicion->clave_posicion . "/" . $posicion->NPuesto  ?></option>
                                          <?php endforeach; ?>

                                      </select>


                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Aceptar" class="btn btn-info btn-block">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="responseAgregar" class="alert text-center hidden"></div>
                                    <div id="buttonLoading" class="hidden">
                                        <div class="btn-block alert alert-success">
                                              <center><strong>INGRESANDO...</strong></center>
                                         </div>
                                    </div>
                                </div>
                            </div>

                        </form>

			                </div>
			              </div>
			            </div>
                  	</div>
                  </div>

                </div>

              </div>
              <!-- end: .col-md-12.admin-grid -->

      </section>
      <!-- End: Content -->

  <!-- Begin: Page Footer -->
      <footer id="content-footer" class="affix">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">© 2015 DROMOS</span>
          </div>
        </div>
      </footer>
      <!-- End: Page Footer -->

    </section>
    <!-- End: Content-Wrapper -->
  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url();?>media/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url();?>media/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>media/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/main.js"></script>


  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>
<!-- Datatables Tabletools addon -->
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

  <!-- Datatables ColReorder addon -->
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>

  <!-- Datatables Bootstrap Modifications  -->
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

  <!-- DatePicker -->
  <script src="<?php echo base_url();?>media/vendor/plugins/datepicker/media/js/bootstrap-datetimepicker.js"></script>

  <!-- Ajax submit forms  -->
  <script src="<?php echo base_url();?>media/assets/js/jquery.form.min.js"></script>

    <!-- Validate forms  -->
  <script src="<?php echo base_url();?>media/assets/js/dist/parsley.js"></script>

  <!-- Select2 Plugin Plugin -->
  <script src="<?php echo base_url();?>media/vendor/plugins/select2/select2.min.js"></script>

    <script src="<?php echo base_url();?>media/assets/js/custom.js"></script>



  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";
    // Init Theme Core
    Core.init();
    $(".select2").select2();
    // Init plugins for ".task-widget"
    $('.datepicker').datepicker();
    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

  });
  </script>
</body>
</html>
