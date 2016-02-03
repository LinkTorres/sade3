      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="<?= base_url() . "principal/" ?>">DROMOS</a>
            </li>
            <li class="crumb-icon">
              <a href="<?= base_url() . "principal/departamentos" ?>">
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
			                    <span class="glyphicon glyphicon-tasks"></span>Editar Departamento</div>
			                </div>
                      
			                <div class="panel-body pn">
                        <?php if(!empty($departamento)): ?>
                        <h5 class="text-center">Actualiza la información</h5>
			                  <form id="actualiza" data-parsley-validate action="<?php echo base_url();?>principal/SEditDepto" method="post" role="form">
                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">ID</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="idDepartamento" value="<?=$departamento->idDepartamento ?>" class="form-control input-sm" readonly required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Área</label>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                      <select class="form-control" name="Area_idArea">
                                          <?php foreach($areas as $item): ?>

                                          <?php if( ($item->idArea) == ($departamento->Area_idArea ) ) : ?>
                                          <option selected="selected" value="<?= $item->idArea ?>"><?= $item->Nombre ?></option>
                                          <?php else: ?>
                                          <option value="<?= $item->idArea ?>"><?= $item->Nombre ?></option>
                                          <?php endif; ?>         
                      
                                          <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>

                            </div>

                             <div class="row">
                              <label class="col-md-2 col-md-offset-1 control-label" for="">Nombre</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="nombre" value="<?=$departamento->Nombre ?>" class="form-control input-sm" placeholder="Nombre" required>
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

    <script src="<?php echo base_url();?>media/assets/js/custom.js"></script> 


  
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";
    // Init Theme Core    
    Core.init();
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


    