<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_GET['id'])) {
    header("location: clienteList.php?1");
    exit();
}
if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: clienteList.php?2");
    exit();
}
$cliente = AutorRepository::get($_GET["id"]);
if (!$cliente) {
    header("location: clienteList.php?3");
    exit();
}


AutorRepository::update($cliente);

if (!$cliente) {
    header("location: clienteList.php");
    exit();
}

if (LivroRepository::countByAutor($cliente->getId()) > 0) {
    header("location: clienteList.php");
    exit();
}

AutorRepository::delete($cliente->getId());

header("location: clienteList.php");
