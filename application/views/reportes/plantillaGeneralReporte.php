
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
                                                      <span class="glyphicon glyphicon-tasks"></span>Reporte de Plantilla<br></div>

                                                </div>
                                                <div class="panel-body pn">
                                                      <table class="text-center table table-striped table-hover display" id="color" cellspacing="0" width="100%">
                                                            <thead >
                                                                  <tr>
                                                                        <th ><br>Número</th>
                                                                        <th >Nombre</th>
                                                                        <th >Puesto</th>
                                                                        <th >Clave</th>
                                                                        <th >Sueldo Diario</th>
                                                                        <th >Sueldo Mensual</th>
                                                                        <th>Departamento</th>
                                                                        <th>Area</th>
                                                                        <th>Turno</th>
                                                                        <th>Ubicacion</th>
                                                                        <th>Regumen</th>
                                                                        <th>Estatus</th>
                                                                  </tr>
                                                            </thead>
                                                            <tbody >

                                                                  <?php if(!empty($plantilla)): ?>
                                                                        <?php foreach ($plantilla as $item):?>
                                                                              <tr>
                                                                                    <td><?= $item->ColaboradorNumero ?></td>
                                                                                    <td><?= $item->ColaboradorNombre ?></td>
                                                                                    <td><?= $item->Puesto ?></td>
                                                                                    <td><?= $item->Clave ?></td>
                                                                                    <td><?= $item->SueldoDiario ?></td>
                                                                                    <td><?= $item->SueldoMensual ?></td>
                                                                                    <td><?= $item->Departamento ?></td>
                                                                                    <td><?= $item->Area ?></td>
                                                                                    <td><?= $item->Turno ?></td>
                                                                                    <td><?= $item->Ubicacion ?></td>
                                                                                    <td><?= $item->Regimen ?></td>
                                                                                    <?php if(!empty($item->estatus)): ?>
                                                                                          <td>Ocupado</td>
                                                                                    <?php else: ?>
                                                                                          <td>Vacante</td>
                                                                                    <?php endif; ?>
                                                                              </tr>
                                                                        <?php endforeach; ?>

                                                                  <?php endif; ?>
                                                            </tbody>
                                                            <tfoot>
                                                      		<tr>
                                                                  <td colspan='8'></td>
                                                                  <td ><b>Subtotal</b></td>
                                                      		<td> <span style="float:right;"id ='subtotal'></span> </td>
                                                                  <td ><b>Total</b></td>
                                                      		<td> <span style="float:right;"id ='total'></span> </td>
                                                      		</tr>

                                                      	</tfoot>

                                                      </table>
                                                      <br>
                                                      <br>
                                                      <div>
                                                            <h3>Resumen Plantilla</h3>
                                                            <table class="text-center table table-striped table-hover col-md-3 col-xs-3">
                                                                  <tr>
                                                                        <td>Plantilla autorizada</td>
                                                                        <?php if(!empty($posTot)): ?>
                                                                              <?php foreach ($posTot as $item):?>
                                                                                    <td><?= $item->Totales ?></td>
                                                                              <?php endforeach; ?>

                                                                        <?php endif; ?>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Ocupadas</td>
                                                                        <?php if(!empty($posOcu)): ?>
                                                                              <?php foreach ($posOcu as $item):?>
                                                                                    <td><?= $item->Ocupados ?></td>
                                                                              <?php endforeach; ?>

                                                                        <?php endif; ?>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Vacantes</td>
                                                                        <?php if(!empty($posDes)): ?>
                                                                              <?php foreach ($posDes as $item):?>
                                                                                    <td><?= $item->Libres ?></td>
                                                                              <?php endforeach; ?>

                                                                        <?php endif; ?>
                                                                  </tr>
                                                            </table>
                                                      </div>
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
<script src="<?php echo base_url();?>media/assets/js/tablesReport.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {

      "use strict";
      // Init Theme Core
      Core.init();
      InitTable2("color","REPORTE DE PLANTILLA" , "landscape");

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
