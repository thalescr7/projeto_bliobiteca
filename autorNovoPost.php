<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_POST['nome'])){
    header("Location: autorNovo.php");
    exit();
}
if($_POST["nome" == ''] || $_POST["nome" == null]){
    header("Location: autorNovo.php");
    exit();
}

$autor = Factory::autor();

$autor->setNome($_POST['nome']);
$autor->setinclusaoFuncionarioId($user->getID());
$autor->setDataInclusao(date('Y-d-m h:i:s'));

$autor_retorno = AutorRepository::insert($autor);

if($autor_retorno > 0){
    header("Location: autorEditar.php?id=".$autor_retorno);
    exit();
}

header("Location: autorNovo.php");
    exit();
