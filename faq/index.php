<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Page for the Fuel Cell Cargo Pedelec Project">
    <meta name="author" content="Daniel Leal">

    <!-- Title Page-->
    
    <title>FAQ</title>

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

<!-- Include header for desktop and mobile -->

<?php include '../database/database.php';

session_start();
 $user_data = user_data_db(); ?>
<?php include '../header/header_desktop.php' ; ?>
<?php include '../header/header_mobile.php' ; ?>


<body class="animsition">
    
<section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p style="text-align: justify ; font-weight: bold; font-size: 18px; padding-left: 2% ; padding-right: 5%">
                    What is a fuel cell?
                    <br>
                </p>
                <p style="text-align: justify ; padding-left: 5% ; padding-right: 5%">
                A fuel cell is an electrochemical system that converts chemical energy of fuel into electrical energy without fuel combustion.
                </p>
                <br>
                <p style="text-align: justify ; font-weight: bold; font-size: 18px; padding-left: 2% ; padding-right: 5%">
                    What is a Polarization Curve?
                    <br>
                </p>
                <p style="text-align: justify ; padding-left:5% ; padding-right: 5%">
                Polarization Curves is a type of electrochemical characterization that allow to asses the performance 
                of the cell at different current densities in the different operation regions. The curves were recorded during
                the tests to understand the progress of degrdation of the cell.
                </p>
                    <br>
                
                 </div>
            </div>
    </div>
    </section>

  

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


</html>
<!-- end document-->