<?php include_once '../database/database.php'; ?>

<?php

    function send_data($voltage, $current){

        $query = "INSERT INTO cell(voltage,current,anode_temp,cathode_temp,latitude, longitude)
                    VALUES(?,?,?,?,?,?)";
        
        $latitude = 48.749210; 
        $longitude =  9.101478
        $values = array($voltage, $current, $voltage, $voltage, $latitude, $longitude);

        db();
        global $conn;

        $result = $conn->prepare($query);
        $result->bind_param("iddddd", $values[0],$values[1],$values[2],$values[3], $values[4], $values[5]);	
        $result->execute();
    }