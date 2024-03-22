<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_POST['nome'])){
    header("Location: clienteNovo.php");
    exit();
}
if($_POST["nome" == ''] || $_POST["nome" == null]){
    header("Location: clienteNovo.php");
    exit();
}

$cliente = Factory::cliente();

$cliente->setNome($_POST['nome']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setEmail($_POST['email']);
$cliente->setCpf($_POST['cpf']);
$cliente->setRg($_POST['rg']);
$cliente->setDataNascimento($_POST['dataNascimento']);
$cliente->setinclusaoFuncionarioId($user->getID());
$cliente->setDataInclusao(date('Y-d-m H:i:s'));

$cliente_retorno = ClienteRepository::insert($cliente);

if($cliente_retorno > 0){
    header("Location: clienteEditar.php?id=".$cliente_retorno);
    exit();
}

header("Location: clienteNovo.php");
    exit();
