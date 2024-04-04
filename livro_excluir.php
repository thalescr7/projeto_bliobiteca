<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_GET['id'])) {
    header("location: livroList.php?1");
    exit();
}
if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: livroList.php?2");
    exit();
}
$livro = AutorRepository::get($_GET["id"]);
if (!$autor) {
    header("location: livroList.php?3");
    exit();
}


AutorRepository::update($livro);

if (!$livro) {
    header("location: livroList.php");
    exit();
}

if (LivroRepository::countByAutor($livro->getId()) > 0) {
    header("location: livroList.php");
    exit();
}

AutorRepository::delete($livro->getId());

header("location: clienteList.php");
