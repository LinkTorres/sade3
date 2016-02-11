<header id="topbar" class="alt">
      <div class="topbar-left">
            <ol class="breadcrumb">
                  <li class="crumb-active">
                        <a href="<?= base_url() . "principal/" ?>">DROMOS</a>
                  </li>
                  <li class="crumb-icon">
                        <a href="<?= base_url() . "principal/posiciones" ?>">
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
                                                      <span class="glyphicon glyphicon-tasks"></span>Editar Posición</div>
                                                </div>

                                                <div class="panel-body pn">
                                                      <?php if(!empty($posicion)): ?>
                                                            <h5 class="text-center">Actualiza la información</h5>
                                                            <form id="actualiza" data-parsley-validate action="<?php echo base_url();?>principal/SEditPosicion" method="post" role="form">
                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">ID</label>
                                                                        <div class="col-xs-6">
                                                                              <div class="form-group">
                                                                                    <input type="text" name="idPosicion" value="<?=$posicion->idPosicion ?>" class="form-control input-sm" readonly required>
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Puesto</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Puesto_clave">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($puestos as $item): ?>
                                                                                                <?php if( ($item->clave) == ($posicion->Puesto_clave ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->clave ?>"><?= $item->nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->clave ?>"><?= $item->nombre ?></option>
                                                                                                <?php endif; ?>

                                                                                          <?php endforeach; ?>
                                                                                    </select>
                                                                              </div>
                                                                        </div>

                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Clave</label>
                                                                        <div class="col-xs-6">
                                                                              <div class="form-group">
                                                                                    <input type="text" name="clave_posicion" value="<?=$posicion->clave_posicion ?>" class="form-control input-sm"  required>
                                                                              </div>
                                                                        </div>
                                                                  </div>
<!--
                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">ColaboradorNum</label>
                                                                        <div class="col-xs-6">
                                                                              <div class="form-group">
                                                                                    <input type="text" name="Colaborador_numEmpleado" value="<?=$posicion->Colaborador_numEmpleado ?>" class="form-control input-sm"  required>
                                                                              </div>
                                                                        </div>
                                                                  </div>-->



                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Sueldo Diario</label>
                                                                        <div class="col-xs-6">
                                                                              <div class="form-group">
                                                                                    <input type="text" name="sueldoDiario" value="<?=$posicion->sueldoDiario ?>" class="form-control input-sm"  required>
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Sueldo Mensual</label>
                                                                        <div class="col-xs-6">
                                                                              <div class="form-group">
                                                                                    <input type="text" name="sueldoMensual" value="<?=$posicion->sueldoMensual ?>" class="form-control input-sm"  required>
                                                                              </div>
                                                                        </div>
                                                                  </div>



                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Departamento</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Departamento_idDepartamento">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($departamentos as $item): ?>
                                                                                                <?php if( ($item->idDepartamento) == ($posicion->Departamento_idDepartamento ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->idDepartamento ?>"><?= $item->Nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->idDepartamento ?>"><?= $item->Nombre ?></option>
                                                                                                <?php endif; ?>

                                                                                          <?php endforeach; ?>
                                                                                    </select>
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Turno</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Turno_idTurno">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($turnos as $item): ?>
                                                                                                <?php if( ($item->idTurno) == ($posicion->Turno_idTurno ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->idTurno ?>"><?= $item->Nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->idTurno ?>"><?= $item->Nombre ?></option>
                                                                                                <?php endif; ?>

                                                                                          <?php endforeach; ?>
                                                                                    </select>
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Régimen</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Regimen_idRegimen">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($regimenes as $item): ?>
                                                                                                <?php if( ($item->idRegimen) == ($posicion->Regimen_idRegimen ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->idRegimen ?>"><?= $item->Nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->idRegimen ?>"><?= $item->Nombre ?></option>
                                                                                                <?php endif; ?>

                                                                                          <?php endforeach; ?>
                                                                                    </select>
                                                                              </div>
                                                                        </div>

                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Ubicación</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Ubicacion_idUbicacion">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($ubicaciones as $item): ?>
                                                                                                <?php if( ($item->idUbicacion) == ($posicion->Ubicacion_idUbicacion ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->idUbicacion ?>"><?= $item->Nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->idUbicacion ?>"><?= $item->Nombre ?></option>
                                                                                                <?php endif; ?>

                                                                                          <?php endforeach; ?>
                                                                                    </select>
                                                                              </div>
                                                                        </div>

                                                                  </div>

                                                                  <div class="row">
                                                                        <label class="col-md-2 col-md-offset-1 control-label" for="">Colaborador</label>
                                                                        <div class="col-xs-6 ">
                                                                              <div class="form-group">
                                                                                    <select class="select2 form-control" name="Colaborador_numEmpleado1">
                                                                                          <option value="">Selecciona</option>
                                                                                          <?php foreach($colaboradores as $item): ?>
                                                                                                <?php if( ($item->numEmpleado) == ($posicion->Colaborador_numEmpleado1 ) ) : ?>
                                                                                                      <option selected="selected" value="<?= $item->numEmpleado ?>"><?= $item->numEmpleado ?>  <?= $item->nombre ?></option>
                                                                                                <?php else: ?>
                                                                                                      <option value="<?= $item->numEmpleado ?>"><?= $item->numEmpleado ?> <?= $item->nombre ?></option>
                                                                                                <?php endif; ?>

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
