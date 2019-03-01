<?php
/*
Plugin Name: miniOrange PHP SAML 2.0 Connector
Version: 11.0.0
Author: miniOrange
*/
include_once 'connector.php';

if(session_id() == 'connector') {
if(!is_user_registered()){
    header("Location: register.php");
    exit();
} else {
    header("Location: admin_login.php");
    exit();
}
}

 ?>