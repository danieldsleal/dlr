<?php

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

//echo "Connection Ok";
$conn->select_db("dlr");

global $conn;

$query = "SELECT voltage, current, anode_temp
            FROM cell
            ORDER BY ID DESC
            LIMIT 61";

$result = $conn->query($query);
$row[] = $result->fetch_assoc();


$data = array();
foreach ($result as $row) {
	$data[] = $row;
}  


echo json_encode($data);


?>