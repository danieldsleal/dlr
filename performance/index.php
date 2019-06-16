<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Fuel Cell Monitoring</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../endor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <!-- Jquery shit!!!!!-->
    <script src="/jquery/jquery.js"></script>

</head>

<!-- Include header for desktop and mobile -->
<?php include '../database/database.php';

session_start();
 $user_data = user_data_db(); ?>
<?php include '../header/header_desktop.php' ; ?>
<?php include '../header/header_mobile.php' ; ?>

<body class="animsition">
<?php if (isset($_SESSION["user_id"])) { ?>
    <div class="page-wrapper">
        <section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
               
                   
                        <canvas id="polcurve" width="350vh" height="600vh"></canvas>
                        <br>
                        <center>
                            <input id="FC-DLC" type="button" class="btn btn-secondary btn-sm" value="Fuel Cell Dynamic Driving Cycle" onclick="doFunction();" /> 
                            <input id="WLTP" type="button" class="btn btn-secondary btn-sm" value="Wolrdwide Harmonized Light Vehicle Cycle" onclick="doFunction();" /> 
                        </center>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <?php } ?>
</body>


</body>
            <!-- END STATISTIC-->
       

    <!-- Jquery JS-->   
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
   
</body>

</html>
<!-- end document-->