<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            background-color: #f9f9f9;
            width: 300px;
        }

        label {
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            /* Verde */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
            /* Verde escuro no hover */
        }


        .sidebar {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            width: 250px;
            background-color: #f9f9f9;
            
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
        .flex{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            gap: 50px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Emprestimo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>


<body>
    <?php include("include/menu.php") ?>
    <h1>Empréstimo de Livros</h1>

    <div class="flex">
        <form action="emprestimo.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="livro">Livro:</label>
            <input type="text" id="livro" name="livro" required>
            <button type="submit">Fazer Empréstimo</button>
        </form>
        <div class="sidebar">
            <h2>Livros Disponíveis na Biblioteca</h2>
            <ul>
                <li>Dom Casmurro</li>
                <li>Memórias Póstumas de Brás Cubas</li>
                <li>Grande Sertão: Veredas</li>
                <li>O Cortiço</li>
                <li>Vidas Secas</li>
            </ul>
        </div>
    </div>

</body>

</html>