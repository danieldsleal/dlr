<?php

	function db(){
		$servername = "fcrex.mysql.database.azure.com";
		$username = "daniel@fcrex";
        $password = "Ahzoo4wi";
      
        global $conn;
        
        
		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check Connection
		if ($conn->connect_error){
			die("Connection Failed: " . $conn->connect_error);
		}
        echo "Connection Ok";


		
		//$conn->select_db("dlr");
	}
?>

<?php db()  ?>