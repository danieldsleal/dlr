<?php include_once '../database/database.php'; ?>

<?php

    if(isset($_POST['voltage'])&& isset($_POST['current']) && isset($_POST['anode_temp']) && isset($_POST['anode_temp'])){

        $query = "INSERT INTO cell(voltage,current,anode_temp,cathode_temp,latitude, longitude)
                    VALUES(?,?,?,?,?,?)";
        
        $latitude = 48.748587; 
        $longitude =  9.101636;
        //$anode_temp = 80.01;
        //$cathode_temp = 79.8;
        $anode_temp = $_POST['anode_temp'];
        $cathode_temp = $_POST['cathode_temp'];
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];

        $values = array($voltage, $current, $anode_temp,$cathode_temp,$latitude, $longitude);

        db();
        global $conn;

        $result = $conn->prepare($query);
        $result->bind_param("iddddd", $values[0],$values[1],$values[2],$values[3], $values[4], $values[5]);	
        $result->execute();
    }

?>