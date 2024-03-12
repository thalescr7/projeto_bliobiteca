<?php
include_once('include/factory.php');

if(!Auth::isAuthenticated()){
    header("Location: login.php");
    exit();
}
?>