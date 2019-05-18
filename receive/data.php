<?php include_once '../database/database.php'; ?>

<?php

    function send_data($voltage){

        $query = "INSERT INTO cell(voltage,current,anode_temp,cathode_temp,latitude, longitude)
                    VALUES(?,?,?,?,?,?)";
        
        $values = array($voltage, $voltage, $voltage, $voltage, $voltage, $voltage);

        db();
        global $conn;

        $result = $conn->prepare($query);
        $result->bind_param("iddddd", $values[0],$values[1],$values[2],$values[3], $values[4], $values[5]);	
        $result->execute();
    }