<?php include_once '../database/database.php'; ?>

<?php
    function check_username($login){
        
        db();
        global $conn;

        $query = "SELECT username
                  FROM users
                  WHERE username = ?";
        
        $result = $conn->prepare($query);
		$result->bind_param('s', $login);
        $result->execute();
        $result->bind_result();
        $row_count = $result->fetch();
        if ($row_count == 1){
            return 1;
        }
        else return 0;
    }


	function addUser($login,$email,$password,$name){

		$options = ['cost' => 12];
		$query = "INSERT INTO users(username,password,email,complete_name)
			        VALUES(?,?,?,?)";

        $password_hashed = password_hash($password, PASSWORD_DEFAULT, $options);
        
        //echo $password_hashed;

        $values = array($login,$password_hashed,$email,$name);
        db();
        global $conn;
        
        $result = $conn->prepare($query);
        $result->bind_param("ssss", $values[0],$values[1],$values[2],$values[3]);	
        $result->execute();
        
        //echo "New records created successfully";
    }
    
 ?>