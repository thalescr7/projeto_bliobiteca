<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_GET['id'])){
    header("location: empresList.php");
    exit();
}
if($_GET["id"] == "" || $_GET["id"] == null){
    header("location: empresList.php");
    exit();
}
$empres = EmprestimoRepository::get($_GET["id"]);
if(!$empres){
    header("location: empresList.php");
    exit();
}

EmprestimoRepository::delete($empres->getId());

header("Location: empresList.php");