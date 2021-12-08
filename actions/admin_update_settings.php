<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/user_controller.php';

if(isset($_SESSION['user_role']) && isset($_SESSION['user_id'])){

    if(isset('updateEmail')){
        echo "fine";
    }
}