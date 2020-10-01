<?php include_once('config.php'); ?>
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo $assets; ?>js/jquery.min.js"></script>
<!--Auto Complete js/css -->
<link rel="stylesheet" href="<?php echo $assets; ?>css/jquery-ui.css">
<script src="<?php echo $assets; ?>js/jquery-1.12.4.js"></script>
<script src="<?php echo $assets; ?>js/jquery-ui.js"></script>
<!--Auto Complete js/css end -->
<script src="<?php echo $assets; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $assets; ?>js/common_validate.js"></script>
<script src="<?php echo $assets; ?>js/common_function.js"></script>
<script src="<?php echo $assets; ?>js/detect.js"></script>
<script src="<?php echo $assets; ?>js/fastclick.js"></script>
<script src="<?php echo $assets; ?>js/jquery.blockUI.js"></script>
<script src="<?php echo $assets; ?>js/waves.js"></script>
<script src="<?php echo $assets; ?>js/jquery.slimscroll.js"></script>
<script src="<?php echo $assets; ?>js/jquery.scrollTo.min.js"></script>
<script src="<?php echo $plugins; ?>switchery/switchery.min.js"></script>
<script src="<?php echo $plugins; ?>summernote/summernote.min.js"></script>
<script src="<?php echo $assets; ?>js/validate.js"></script>

<script src="<?php echo $plugins; ?>moment/moment.js"></script>
<script src="<?php echo $plugins; ?>timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $plugins; ?>clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="<?php echo $plugins; ?>parsleyjs/parsley.min.js"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo $plugins; ?>bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="<?php echo $assets; ?>pages/jquery.sweet-alert.init.js"></script>

<script src="<?php echo $plugins; ?>bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $plugins; ?>multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo $plugins; ?>jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="<?php echo $plugins; ?>select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $plugins; ?>bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo $plugins; ?>bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?php echo $plugins; ?>bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"
        type="text/javascript"></script>
<script src="<?php echo $plugins; ?>bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<!-- Counter js  -->
<script src="<?php echo $plugins; ?>waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo $plugins; ?>counterup/jquery.counterup.min.js"></script>


<script src="<?php echo $plugins; ?>moment/moment.js"></script>
<script src="<?php echo $plugins; ?>timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $plugins; ?>clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo $plugins; ?>bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="<?php echo $plugins; ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.bootstrap.js"></script>

<script src="<?php echo $plugins; ?>datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/jszip.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/pdfmake.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/vfs_fonts.js"></script>

<!--  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/sc-1.4.3/datatables.min.js"></script> -->

<script src="<?php echo $plugins; ?>datatables/buttons.html5.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/buttons.print.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.colVis.js"></script>
<script src="<?php echo $plugins; ?>datatables/dataTables.fixedColumns.min.js"></script>

<!-- init -->
<script src="<?php echo $assets; ?>pages/jquery.datatables.init.js"></script>
<script src="<?php echo $assets; ?>pages/jquery.form-pickers.init.js"></script>
<script type="text/javascript" src="<?php echo $assets; ?>pages/jquery.form-advanced.init.js"></script>

<!--  <script src="<?php echo $assets; ?>pages/jquery.dashboard_2.js"></script> -->

<!-- App js -->
<script src="<?php echo $assets; ?>js/jquery.core.js"></script>
<script src="<?php echo $assets; ?>js/jquery.app.js"></script>

<!-- jquery alerts -->
<link rel="stylesheet" href="<?php echo $assets; ?>css/jquery-confirm.min.css">
<script src="<?php echo $assets; ?>js/jquery-confirm.min.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function(){
      	 $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [//{
            //     extend: "copy",
            //     className: "btn-sm"
            // },
             {
                extend: "csv",
                className: "btn-sm"
            }, {
                extend: "excel",
                className: "btn-sm"
            }, {
                extend: "pdf",
                className: "btn-sm"
            }, 
            //{
            //     extend: "print",
            //     className: "btn-sm"
            // }
            ],
            responsive: !0
        });
      	  $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });


          $('.summernote').summernote({
                // toolbar: [
                //   ['undo', ['undo',]],
                //   ['redo', ['redo',]],
                //   ['style', ['bold', 'italic', 'underline',]],
                //   ['font', ['strikethrough',]],
                //   ['fontsize', ['fontsize']],
                //   ['color', ['color']],
                //   ['para', ['ul', 'ol', 'paragraph']],
                // ]
              height: 90,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: false                 // set focus to editable area after initializing summernote
          });
fontsize: '16'
          // $('.summernote').summernote('fontSize', 44);
          $('.inline-editor').summernote({
              airMode: true
          });
$('.summernote').summernote();

      });
  </script>





        
 
 


