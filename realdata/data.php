<?php

<<<<<<< HEAD
$servername = "fcrex.mysql.database.azure.com";
$username = "daniel@fcrex";
$password = "Ahzoo4wi";
=======
$servername = "localhost:3306";
$username = "root";
$password = "";
>>>>>>> origin/master
global $conn;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check Connection
if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
}

//echo "Connection Ok";
$conn->select_db("dlr");

global $conn;

$query = "SELECT voltage, current, anode_temp, cathode_temp, latitude, longitude
			FROM cell
			ORDER BY  ID DESC
			LIMIT     1";

$result = $conn->query($query);
$row = $result->fetch_assoc();

echo json_encode($row);

?>

