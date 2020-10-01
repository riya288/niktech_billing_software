    <?php
     include_once('include/connection.php');
     include_once("include/config.php");
     include_once("include/constant.php");
     ?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url; ?>images/tricube_img/logo.gif">
        <!-- App title -->
        <title>Bill Book</title>

         <!-- App css -->
        <link href="<?php echo base_url; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/common_class.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/assets/css/custom_product.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url; ?>public/plugins/switchery/switchery.min.css">

    
        
          <link href="<?php echo base_url; ?>public/plugins/summernote/summernote.css" rel="stylesheet" />


        <!-- Sweet Alert -->
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->

        <!-- DataTables -->
        <link href="<?php echo base_url; ?>public/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url; ?>public/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        
       <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/sc-1.4.3/datatables.min.css"/> -->

        <link href="<?php echo base_url; ?>public/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo base_url; ?>public/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        
        <link href="<?php echo base_url; ?>public/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url; ?>public/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url; ?>public/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        
     
       
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url; ?>public/assets/js/modernizr.min.js"></script>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    