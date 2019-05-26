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

		//echo "Connection Ok";
		$conn->select_db("dlr");
	}
?>

<?php
	function check_login_db($username, $password){
		db();
		global $conn;
		
		$query = "SELECT ID, password
				FROM users
				WHERE username = ?";
		
		//$values = array($username);
		$result = $conn->prepare($query);
		$result->bind_param("s", $username);
		
		$result->execute();

		//$numrows = $result->num_rows;
		//echo($numrows);
		$result->bind_result($id, $hash);
		$result->fetch();

		
		$pass_result = password_verify($password, $hash);
	
		if($pass_result != true) 
			return NULL;
		else 
			return $id;
	
	}
?>

<?php
function user_data_db (){
		$user_id = $_SESSION["user_id"]; /* lê o id do utilizador já registado por sessão */
		
		db();
		global $conn;

		$query = "SELECT *
                  FROM users
                  WHERE ID= ?";

		$result = $conn->prepare($query);
		$result->bind_param('i', $user_id);
		$result->execute();
		$result2 = $result->get_result(); //when you want all the collumns
	
		$row = $result2->fetch_assoc();
		
        return $row;
    }
?>


