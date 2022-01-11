<?php

$str = "";
$title = "SD-CRM";
$alt = $title;

if (@$exTitle) $title = $alt . "-$exTitle";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> <?php print $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../CRMFromScratch/plugins/css/summernote-bs4.min.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../CRMFromScratch/plugins/media/rfco_image.png" alt="RFCO" height="150" width="150" />
        </div>

        
        <?php 
        include 'navbar.php';
        include 'aside.php'; ?>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../CRMFromScratch/plugins/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../CRMFromScratch/plugins/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../CRMFromScratch/plugins/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../CRMFromScratch/plugins/js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../CRMFromScratch/plugins/js/sparkline.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="../CRMFromScratch/plugins/js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../CRMFromScratch/plugins/js/moment.min.js"></script>
    <script src="../CRMFromScratch/plugins/js/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../CRMFromScratch/plugins/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../CRMFromScratch/plugins/js/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../CRMFromScratch/plugins/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../CRMFromScratch/plugins/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../CRMFromScratch/plugins/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../CRMFromScratch/plugins/js/dashboard.js"></script>
</body>

</html>