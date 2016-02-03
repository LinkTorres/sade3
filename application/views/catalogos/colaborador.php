  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/magnific/magnific-popup.css">

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
      <a class="btn btn-info pull-right" href="<?= base_url() . "principal/nuevoColaborador" ?>">Agregar Nuevo <span class="glyphicon glyphicon-book"></span></a>

      
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
			                    <span class="glyphicon glyphicon-tasks"></span>Gestion de Colaboradores</div>
			                </div>
			                <div class="panel-body pn">
			                  <table class="text-center table table-striped table-hover display" id="tabla" cellspacing="0" width="100%">
			                    <thead >
			                      <tr>
			                        <th >No.</th>
                              <th >Nombre</th>
                              <th >Apellidos</th>
                              <th >CURP</th>
                              <th >NSS</th>
                              <th >Posicion</th>
                              <th >Dpto</th>
                              <th >Área</th>
                              <th >Dirección</th>
                              <th >Ubicación</th>
			                        <th class="text-center">Editar</th>
			                        <th class="text-center">Eliminar</th>
			                      </tr>
			                    </thead>
			                    <tbody >
			                    	<?php if(!empty($colaboradores)): ?>
			                    	<?php foreach ($colaboradores as $item):?>
			                    	<tr>
			                    		<td><?= $item->numEmpleado ?></td>
                              <td><?= $item->nombre ?></td>
                              <td><?= $item->apellidoPaterno . " " . $item->apellidoMaterno ?></td>
                              <td><?= $item->curp ?></td>
                              <td><?= $item->NSS ?></td>
                              <td><?= $item->clave_posicion ?></td>
                              <td><?= $item->departamento ?></td>
                              <td><?= $item->area ?></td>
                              <td><?= $item->direccion ?></td>
                              <td><?= $item->DesUbicacion ?></td>
			                    		<td><a class="btn btn-info btn-md" href="<?php echo base_url() . "principal/editarColaborador/" . $item->numEmpleado?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			                    		<td><button class="eliminar btn btn-danger btn-md" data-val="<?=$item->numEmpleado ?>"><span class="glyphicon glyphicon-trash"></span></button></td>
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
            <a id="prueba" href="#">prueba modaaaaal </a>
            <span class="footer-legal">© 2015 DROMOS</span>
          </div>
        </div>
      </footer>
      <!-- End: Page Footer -->

    </section>
    <!-- End: Content-Wrapper -->


     <!-- Motivos Popup -->
        <div id="motivosForm" class="popup-basic admin-form mfp-with-anim mfp-hide">
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title">
                <i class="fa fa-rocket"></i>Motivos de la baja</span>
            </div>
            <!-- end .panel-heading section -->

            <form id="addMotivos" data-parsley-validate action="<?php echo base_url();?>principal/SAddBaja" method="post" role="form">
              <div class="panel-body p25">
                <div class="section row">
                  <div class="col-md-12">
                    <label for="fechaBaja2" class="field prepend-icon">
                      <input type="text" name="Colaborador_numEmpleado" id="Colaborador_numEmpleado" class="hidden" >
                      <input required type="text" name="fechaBaja2" id="fechaBaja2" class="gui-input" placeholder="Fecha de Baja">
                      <label for="fechaBaja2" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end section row section -->

                <div class="section row">
                  <div class="col-md-12">
                    <label for="motivos" class="field prepend-icon">
                         <select required class="gui-input" id="motivos" name="Motivos_idMotivos">
                          <option selected="selected" value="">Selecciona</option>
                          <?php foreach($motivos as $item): ?>
                          <option value="<?= $item->idMotivos ?>" title="<?= truncate($item->Descripcion , 50 )?>"><?= $item->Nombre ?></option>
                          <?php endforeach; ?>
                          </select>
                    
                    </label>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end section row section -->

                <div class="section">
                  <label for="comentario" class="field prepend-icon">
                    <textarea class="gui-textarea" id="comentario" name="comentario" placeholder="Tu comentario"></textarea>
                    <label for="comentario" class="field-icon">
                      <i class="fa fa-comments"></i>
                    </label>
                    <span class="input-footer">
                      <strong>Ingresa:</strong> un comentario sobre la baja...</span>
                  </label>
                </div>
                <!-- end section -->

              </div>
              <!-- end .form-body section -->

              <div class="panel-footer">
                <button type="submit" class="button btn-primary">Aceptar</button>

                                <div class="col-xs-12">
                                    <div id="responseMotivos" class="alert text-center hidden"></div>
                                    <div id="buttonLoading" class="hidden">
                                        <div class="btn-block alert alert-success">
                                              <center><strong>INGRESANDO...</strong></center>
                                         </div>
                                    </div>
                                </div>

              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end: .panel -->
        </div>
        <!-- end: .admin-form -->

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
     var columnas = [0, 1 , 3 ,4 ,5 ,6 ,7 ,8 ,9];
    InitTable("tabla","CATALOGO DE COLABORADORES" , "landscape" ,columnas);

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
		                     datastr = "numEmpleado=" + id ;
		                            $.ajax({
		                                type: "POST", 
		                                async: false, 
		                                url: '<?php echo base_url(); ?>principal/eliminaColaborador',
		                                data: datastr, 
		                                dataType: "text",
		                                cache:false,
		                                success: function(data){
		                                    bootbox.alert(data, function() {
                                          $('#Colaborador_numEmpleado').val(id);
                                         // Inline Admin-Form example 
                                          $.magnificPopup.open({
                                            removalDelay: 500, //delay removal by X to allow out-animation,
                                            items: {
                                              src: "#motivosForm" 
                                            },
                                            // overflowY: 'hidden', // 
                                            callbacks: {
                                              beforeOpen: function(e) {
                                                var Animation = "mfp-fullscale";
                                                this.st.mainClass = Animation;
                                              }
                                            },
                                            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                                          });
                                        });
		                                },  
		                                error: function(){bootbox.alert("Error al procesar la operación");}
		                    });

		                    OEliminar.parent().parent().remove();
						}
           			 });       
        });

 <?php if(isset($_GET['msg'])){
      echo "bootbox.alert('Registro ingresado correctamente');";
 } ?>

    </script>

</body>
</html>


    