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
			                    <span class="glyphicon glyphicon-tasks"></span>Editar Colaborador</div>
			                </div>

			                <div class="panel-body pn">
                        <?php if(!empty($colaborador)): ?>
                        <h5 class="text-center">Actualiza la información</h5>
			                  <form id="actualiza" data-parsley-validate action="<?php echo base_url();?>principal/SEditColaborador" method="post" role="form">
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">No.Empleado</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="numEmpleado" value="<?=$colaborador->numEmpleado ?>" class="form-control input-sm" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Jefe</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="select2 form-control" name="jefeNumEmpleado">
                                          <?php foreach($colaboradores as $item): ?>

                                          <?php if( ($item->numEmpleado) == ($colaborador->numEmpleado ) ) : ?>
                                          <option selected="selected" value="<?= $item->numEmpleado ?>"><?= $item->numEmpleado?></option>
                                          <?php else: ?>
                                          <option value="<?= $item->numEmpleado ?>"><?= $item->numEmpleado ?></option>
                                          <?php endif; ?>

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
                                          <?php if( ($colaborador->estatus) == "0" ) : ?>
                                          <option selected="selected" value="0">INACTIVO</option>
                                          <option value="1">ACTIVO</option>
                                          <?php else: ?>
                                          <option value="0">INACTIVO</option>
                                          <option selected="selected" value="1">ACTIVO</option>
                                          <?php endif; ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Nombre</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="nombre" value="<?=$colaborador->nombre ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Apellido Paterno</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="apellidoPaterno" value="<?=$colaborador->apellidoPaterno ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Apellido Materno</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="apellidoMaterno" value="<?=$colaborador->apellidoMaterno ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>-->

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Sexo</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="sexo">
                                          <?php if( ($colaborador->estatus) == "0" ) : ?>
                                          <option selected="selected" value="0">FEMENINO</option>
                                          <option value="1">MASCULINO</option>
                                          <?php else: ?>
                                          <option value="0">FEMENINO</option>
                                          <option selected="selected" value="1">MASCULINO</option>
                                          <?php endif; ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Curp</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="curp" value="<?=$colaborador->curp ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Rfc</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="rfc" value="<?=$colaborador->rfc ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">NSS</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="NSS" value="<?=$colaborador->NSS ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Direccion</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="Direccion" value="<?=$colaborador->Direccion ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Colonia</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="Colonia" value="<?=$colaborador->Colonia ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">CP</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="CP" value="<?=$colaborador->CP ?>" class="form-control input-sm"  required>
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
                                      <input type="text" name="fechaNac" value="<?=$colaborador->fechaNac ?>" class="form-control input-sm datepicker"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Telefono Casa</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="TelCasa" value="<?=$colaborador->TelCasa ?>" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Telefono Celular</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="TelCelular" value="<?=$colaborador->TelCelular ?>" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Escolaridad</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="Escolaridad_idEscolaridad">
                                          <?php foreach($escolaridades as $item): ?>

                                          <?php if( ($item->idEscolaridad) == ($colaborador->Escolaridad_idEscolaridad ) ) : ?>
                                          <option selected="selected" value="<?= $item->idEscolaridad ?>"><?= $item->descripcion ?></option>
                                          <?php else: ?>
                                          <option value="<?= $item->idEscolaridad ?>"><?= $item->descripcion ?></option>
                                          <?php endif; ?>

                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Posición Actual </label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="posicionActual" value="<?=$colaborador->clave_posicion ?>" class="hidden form-control input-sm">
                                      <input type="text" value="<?=$colaborador->clave_posicion . "/" . $colaborador->puesto  ?>" class="form-control input-sm" readonly >
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Transferir posición</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <div class="" data-toggle="buttons">
                                        <label id="estatus_estado1" class="activar_comentario btn btn-sm btn-success active" onclick="actualiza_estatus(0);">
                                            <input type="radio" name="options" id="option1" autocomplete="off" >
                                            <i class="fa fa-check"></i> SI
                                        </label>
                                        <label id="estatus_estado2" class="activar_comentario btn btn-sm btn-danger" onclick="actualiza_estatus(1);">
                                            <input type="radio" name="options" id="option2" autocomplete="off" >
                                            <i class="fa fa-warning"></i> NO
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div id="nuevaPosicion"  class="hidden row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Nueva Posición</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" id="inputNuevaPosicion" name="nuevaPosicion">
                                           <option selected="selected"  value="">Selecciona</option>
                                          <?php foreach($freePosiciones as $posicion): ?>
                                          <option value="<?= $posicion->clave_posicion ?>"><?= $posicion->clave_posicion . "/" . $posicion->NPuesto  ?></option>
                                          <?php endforeach; ?>

                                      </select>


                                    </div>
                                </div>
                            </div>




                            <input type="submit" value="Actualizar" class="btn btn-info btn-block">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="responseEditar" class="alert text-center hidden"></div>
                                    <div id="buttonLoading" class="hidden">
                                        <div class="btn-block alert alert-success">
                                              <center><strong>ACTUALIZANDO...</strong></center>
                                         </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    <?php else: ?>
                    <div class="alert alert-danger text-center">NO SE ENCONTRO REGISTRO</div>
                    <?php endif; ?>

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


       function actualiza_estatus(value){
      if(value == 1 ){
        $('#nuevaPosicion').removeClass("hidden");
      }else{
        $('#inputNuevaPosicion option[value=""]').attr('selected','selected');
        $('#nuevaPosicion').addClass("hidden");
      }

      }


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
