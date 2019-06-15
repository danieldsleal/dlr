<?php include_once '../database/database.php'; ?>


<?php
    function verifica_login($username, $password){
        global $conn;
        if (!isset($conn)){
            db();
        }
        return check_login_db($username, $password);
    }
    session_start();
    if (isset($_POST["fusername"]) && isset($_POST["fpassword"]) ){
        $id = verifica_login($_POST["fusername"], $_POST["fpassword"]);
        $_SESSION["user_id"] = $id;
        //echo $_SESSION["user_id"];
        //echo($id);
        if ($id != NULL) {
            $message = array('status' => 'ok');
           
        }
	    else {
            $message = array('status' => 'not_ok');
            header("location: /index.php");
        }
    }
    
    if(isset($_SESSION['user_id'])) {
        //echo "Your session is running " . $_SESSION['user_id'];
        header("location: ../realdata/index.php");
      }
    
    //echo json_encode($message);
    
    
  
   
?>