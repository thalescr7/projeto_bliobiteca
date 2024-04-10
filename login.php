<?php
include_once('include/factory.php');

if(Auth::isAuthenticated()){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada da Biblioteca</title>
    <link rel="stylesheet" href="sytle.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f6f6f6;
    margin: 0;
    padding: 0;
    background-color: #333;
}

.container {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Seja Bem-Vindo à Biblioteca</h1>
        <p>Faça seu login a baixo com seus dados para entrar na pagina da biblioteca.</p>
        <form action="logar.php" method="post">
            <label for="cpf">Cpf:</label>
            <input type="text" id="cpf" name="cpf" required maxlength="11">
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <button type="submit" style="background-color:darkgreen;">Entrar</button>
        </form>
    </div>
</body>
</html>
