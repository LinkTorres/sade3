
           <!-- Vendor CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/vendor/plugins/magnific/magnific-popup.css">

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
                          <span class="glyphicon glyphicon-tasks"></span>Pantalla de prueba</div>
                      </div>
                      
                      <div class="panel-body pn">
                        <h5 class="text-center">Ingresa la información</h5>
                        <form id="prueba" data-parsley-validate action="<?php echo base_url();?>principal/eliminaColaborador" method="post" role="form">


                            <div class="row">
                                <label class="col-md-2 col-md-offset-1 control-label" for="">Nombre</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                      <input type="text" name="numEmpleado" value="" class="form-control input-sm"  required>
                                    </div>
                                </div>
                            </div>
                            <a id="activarModal" href="#">ACTIVAR EL MODAL</a>
                            
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



        <!-- Admin Form Popup -->
        <div id="modal-form" class="popup-basic admin-form mfp-with-anim mfp-hide">
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title">
                <i class="fa fa-rocket"></i>Leave a comment</span>
            </div>
            <!-- end .panel-heading section -->

            <form method="post" action="/" id="comment">
              <div class="panel-body p25">
                <div class="section row">
                  <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon">
                      <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                      <label for="firstname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                      <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                      <label for="lastname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end section row section -->

                <div class="section row">
                  <div class="col-md-6">
                    <label for="email" class="field prepend-icon">
                      <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                      <label for="email" class="field-icon">
                        <i class="fa fa-envelope"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="website" class="field prepend-icon">
                      <input type="url" name="website" id="lastname" class="gui-input" placeholder="Website url...">
                      <label for="website" class="field-icon">
                        <i class="fa fa-globe"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end section row section -->

                <div class="section">
                  <label for="comment" class="field prepend-icon">
                    <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                    <label for="comment" class="field-icon">
                      <i class="fa fa-comments"></i>
                    </label>
                    <span class="input-footer">
                      <strong>Hey You:</strong> We expect a great comment...</span>
                  </label>
                </div>
                <!-- end section -->

              </div>
              <!-- end .form-body section -->

              <div class="panel-footer">
                <button type="submit" class="button btn-primary">Post Comment</button>
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end: .panel -->
        </div>
        <!-- end: .admin-form -->

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
<script src="<?php echo base_url();?>media/vendor/plugins/magnific/jquery.magnific-popup.js"></script>



  
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


<script type="text/javascript">

    // Form Skin Switcher
    $('#activarModal').on('click', function() {

      // Inline Admin-Form example 
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: "#modal-form" 
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


</script>

</body>
</html>


    