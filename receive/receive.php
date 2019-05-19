<?php include_once '../receive/data.php' ?>

<?php

    if(isset($_POST['voltage'])&& isset($_POST['current'])){
        send_data($_POST['voltage'], $_POST['current']);
    }

?>