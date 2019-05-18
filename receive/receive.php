<?php include_once '../receive/data.php' ?>

<?php

    if(isset($_POST['ok'])){
        send_data($_POST['ok']);
    }

?>