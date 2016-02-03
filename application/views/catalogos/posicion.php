
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="<?= base_url() . "principal/" ?>">DROMOS</a>
            </li>
          </ol>
        </div>
     <a class="btn btn-info pull-right" href="<?= base_url() . "principal/nuevaPosicion" ?>">Agregar Nueva <span class="glyphicon glyphicon-book"></span></a>


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
			                    <span class="glyphicon glyphicon-tasks"></span>Gestion de Posiciones</div>
			                </div>
			                <div class="panel-body pn">
			                  <table class="text-center table table-striped table-hover display" id="tabla" cellspacing="0" width="100%">
			                    <thead >
			                      <tr>
			                        <th >ID</th>
                              <th >Clave</th>
                              <th >Puesto</th>
                              <th >Dpto</th>
                              <th >Turno</th>
                              <th >Regimen</th>
                              <th >Empleado</th>
                              <th >Ubicación</th>
			                        <th class="text-center">Editar</th>
			                        <th class="text-center">Eliminar</th>
			                      </tr>
			                    </thead>
			                    <tbody >
			                    	<?php if(!empty($posiciones)): ?>
			                    	<?php foreach ($posiciones as $item):?>
			                    	<tr>
			                    		<td><?= $item->idPosicion ?></td>
                              <td><?= $item->clave_posicion ?></td>
                              <td><?= $item->NPuesto ?></td>
                              <td><?= $item->NDepartamento ?></td>
                              <td><?= $item->NTurno ?></td>
                              <td><?= $item->NRegimen ?></td>
                              <th ><?= $item->Colaborador_numEmpleado1 ?></th>
                              <td><?= $item->NUbicacion ?></td>
			                    		<td><a class="btn btn-info btn-md" href="<?php echo base_url() . "principal/editarPosicion/" . $item->idPosicion?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			                    		<td><button class="eliminar btn btn-danger btn-md" data-val="<?=$item->idPosicion ?>"><span class="glyphicon glyphicon-trash"></span></button></td>
			                    	</tr>
			                    	<?php endforeach; ?>
			                    	<?php endif; ?>
			                    </tbody>
			                  </table>
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

  <!-- DATATABLES -->
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js">
  </script>
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.html5.min.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js">
  </script>
  <script src="<?php echo base_url();?>media/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>media/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/main.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <script src="<?php echo base_url();?>media/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <!-- Ajax submit forms  -->
  <script src="<?php echo base_url();?>media/assets/js/jquery.form.min.js"></script>
      <!-- Alerts  -->
  <script src="<?php echo base_url();?>media/assets/js/dist/bootbox.min.js"></script>
  <script src="<?php echo base_url();?>media/assets/js/catalogReport.js"></script>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";
    // Init Theme Core
    Core.init();
    var columnas = [0, 1 ,2 ,3 ,4 ,5 ,6 ,7];
    InitTable("tabla","CATALOGO DE POSICIONES" , "landscape" ,columnas);

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
  <!-- END: PAGE SCRIPTS -->


    <script type="text/javascript">

	    $('.eliminar').click(function(e) {
	    	var OEliminar=$(this);
	    	bootbox.confirm("<center>¿Esta seguro que desea eliminar el registro? <br></center>", function(confirmed) {
                        if(confirmed==true)
                        {
                        	id= OEliminar.data("val");
		                     datastr = "idPosicion=" + id ;
		                            $.ajax({
		                                type: "POST",
		                                async: false,
		                                url: '<?php echo base_url(); ?>principal/eliminaPosicion',
		                                data: datastr,
		                                dataType: "text",
		                                cache:false,
		                                success: function(data){
		                                    bootbox.alert(data);
		                                },
		                                error: function(){bootbox.alert("Error al procesar la operación");}
		                    });

		                    OEliminar.parent().parent().remove();
						}
           			 });
        });

    </script>

</body>
</html>
