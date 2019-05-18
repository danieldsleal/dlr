<?php include_once '../register/check.php' ?>

<?php
	  if(isset($_POST['fusername']) && isset($_POST['femail']) && isset($_POST['fname']) && isset($_POST['fpassword'])){
			//$login = htmlentities($_POST['username']);
			//$password = htmlentities($_POST['email']);
			//$email = htmlentities($_POST['password']);

            if (check_username($_POST['fusername']) == 1){
				addUser($_POST['fusername'],$_POST['femail'],$_POST['fpassword'],$_POST['fname']);
				$message = array('status' => 'ok');
				header ("LOCATION: /dlr/login/index.php");
			}
			
			
			
		} else $message = array('status' => 'not_ok');

		header ("LOCATION: /dlr/index.php");
?>