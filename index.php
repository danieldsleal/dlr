<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Page for the Fuel Cell Cargo Pedelec Project">
    <meta name="author" content="Daniel Leal">

    <!-- Title Page-->
    
    <title>Fuel Cell Cargo Pedelecs</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<!-- Include header for desktop and mobile -->
<?php
    
    include_once 'login/session.php'; 
    include 'header/header_desktop.php' ;
       
    include 'header/header_mobile.php' ; 
    $user_data = user_data_db();
?>

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

    <section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p style="text-align: center ; padding-left: 65px ; padding-right: 65px">
                    The main motivation of this dissertation is to test this fuel cell in comparison to 
                    a normal electric bicycle and evaluate its performance and degradation and to develop 
                    a small data acquisition unit to gather performance data of this new fuel cell. 
                    s
                    d
                    f
                    r
                    <br>
                    <br>
                    <br>
                    <br>
                    This project was develop at DLR (Deutsches Zentrum für Luft- und Raumfahrt) meaning that everything displayed 
                    here is owned by them. This project is part of my master thesis in electrical engineering from Porto University.
                
                </p>
                 </div>
            </div>
    </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg">

            </div>
            <div class="col-lg">
            <img class="thumbnail img-responsive" src="images/dlr.png" width= 100%>
            </div>
            <div class="col-lg">
            <img src="images/feup.png" class="rounded" width= 100%>
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
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>


</html>
<!-- end document-->