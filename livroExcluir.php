<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_GET['id'])){
    header("location: livroList.php?1");
    exit();
}
if($_GET["id"] == "" || $_GET["id"] == null){
    header("location: livroList.php?2");
    exit();
}
$livro = livroRepository::get($_GET["id"]);
if(!$livro){
    header("location: livroList.php?3");
    exit();
}

if(EmprestimoRepository::countByLivros($livro->getId()) > 0){
    header("location: livroList.php?4");
    exit();
}

LivroRepository::delete($livro->getId());

header("Location: livroList.php?5");