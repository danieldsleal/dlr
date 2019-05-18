<?php include_once '../receive/data.php' ?>

<?php

    if(isset($_POST['ok'])&& isset($_POST['ok2'])){
        send_data($_POST['ok'], $_POST['ok2']);
    }

?>