<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>About the project</title>

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

</head>

<!-- Include header for desktop and mobile -->
<?php include '../database/database.php'; 
session_start();
 $user_data = user_data_db(); ?>
<?php include '../header/header_desktop.php' ; ?>
<?php include '../header/header_mobile.php' ; ?>

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

    <section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p style="text-align: justify ; padding-left: 5% ; padding-right: 5%">
                    The goal of this master thesis is to analyze different load cycles that 
                    simulate real driving profiles and study the performance and degradation 
                    of the cell along time. To study this, Ex-Situ and In-situ characterization 
                    of the cell will be made. In-situ techniques will be based on Cyclic Voltammetry (CV) 
                    and Electrochemical Impedance spectroscopy (EIS). To evaluate the changes on the 
                    surface of different parts of the cell and assess its degradation, Ex-Situ analysis 
                    will be performed using scanning electron microscopy (SEM) and X-ray photoelectron 
                    spectroscopy (XPS). Additionally a data acquisition unit will be developed to gather 
                    real-time information of the testing station. 
                    <br>
                    <br>
                    This project was develop at DLR (Deutsches Zentrum für Luft- und Raumfahrt) meaning that everything displayed 
                    here is owned by them. This project is part of my master thesis in electrical engineering from Porto University.
                    <br>
                    <br>
                </p>
                 </div>
            </div>
    </div>
    </section>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg">

            </div>
            <div class="col-lg">
            <img class="thumbnail img-responsive" src="../images/dlr.png" width= 100%>
            </div>
            <div class="col-lg">
            <img src="../images/feup.png" class="rounded" width= 80%>
            </div>
            <div class="col-lg">
            </div>
            
      
        </div>
    </div>
<!-- COPYRIGHT-->
    <section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© Daniel José Damas da Silva Leal, 2019</p>
                        <p>Copyright © 2018 Colorlib. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- END COPYRIGHT-->

        </div> 

    </div>

</body>

    <!-- Jquery JS-->   
    <script src="../vendor/jquery-3.2.1.min.js"></script>
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