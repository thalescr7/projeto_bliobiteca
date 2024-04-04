<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_GET['id'])) {
    header("location: funcionarioList.php?1");
    exit();
}
if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: funcionarioList.php?2");
    exit();
}
$funcionario = AutorRepository::get($_GET["id"]);
if (!$funcionario) {
    header("location: funcionarioList.php?3");
    exit();
}


AutorRepository::update($funcionario);

if (!$funcionario) {
    header("location: funcionarioList.php");
    exit();
}

if (FuncionarioRepository::countByAutor($funcionario->getId()) > 0) {
    header("location: funcionarioList.php");
    exit();
}

AutorRepository::delete($funcionario->getId());

header("location: funcionarioList.php");
