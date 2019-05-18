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

<body>

<script type="text/javascript" scr ="/jquery/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

        function refreshData(){
            $.getJSON('data.php', function (data){
                $("#voltage").html(data.voltage + " " + "mV");
                $("#current").html(data.current + " " + "A");
                $("#anode_temp").html(data.anode_temp + " " + "ºC");
                $("#cathode_temp").html(data.cathode_temp + " " + "ºC");
                $latitude = parseFLoat(data.latitude);
                }
            )};
    
    // Keep interval in a variable in case you want to cancel it later.
    var refreshInterval = setInterval(refreshData, 10 * 1000); 
    refreshData(); 
    });
</script>

<?php if (isset($_SESSION["user_id"])) { ?>
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">Voltage</h2>
                        <span class="desc"><div id="voltage"></div></span>
                        <div class="icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">Current</h2>
                        <span class="desc"><div id="current"></div></span>
                        
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">Anode Temperature</h2>
                        <span class="desc"><div id="anode_temp"></div></span>
                        <div class="icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">Cathode Temperature</h2>
                        <span class="desc"><div id="cathode_temp"></div></span>
                        <div class="icon">
                            <i class="fas fa-temperature-low"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
            

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="map" style="width:100%;height:350px;"></div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <script>
    $(document).ready(function(){
    function refreshData2(){
        $.getJSON('data.php', function (data) {
            var mapProp = {
                center:new google.maps.LatLng(parseFloat(data.latitude), parseFloat(data.longitude)),
                zoom:12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById('map'),mapProp);

            var myLatLng  = {lat: parseFloat(data.latitude), lng: parseFloat(data.longitude)};

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            });
        });
    };
        var refreshInterval2 = setInterval(refreshData2, 60 * 1000); 
        refreshData2(); 
    });

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkpMoI9aICJc7U4BdoXtSPQSxk26ODffo&callback=myMap"></script>



<?php } ?>
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