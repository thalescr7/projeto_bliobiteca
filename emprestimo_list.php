<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Emprestimo listagem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(to right, #FF0000, #0000FF);
            /* Gradiente de vermelho para azul */
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: fixed;
            right: 20px;
            bottom: 20px;
        }

        .custom-button:active {
            background: linear-gradient(to right, #FF0000, #0000FF);
        }

        .delete-button {
            background: #f00;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;

        }


        .button-container button {
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <?php include("include/menu.php") ?>

    <h1>Emprestimo > Listagem</h1>

    <div class="button-container">
        <button type="button" class="btn btn-primary">Todos</button>
        <button type="button" class="btn btn-primary">Ativos</button>
        <button type="button" class="btn btn-primary">Devolvidos</button>
        <button type="button" class="btn btn-primary">Vencidos</button>
        <button type="button" class="btn btn-primary">Renovados</button>
        <button type="button" class="btn btn-primary">Não Renovados</button>
    </div>

    <table>
        <tr>
            <th>Livro</th>
            <th>Nome do Leitor</th>
            <th>Data de Empréstimo</th>
            <th>Data de Devolução</th>
            <th>Ações</th>
        </tr>
        <tr>
            <td>Exemplo de Livro</td>
            <td>Nome do Leitor</td>
            <td>01/01/2022</td>
            <td>01/02/2022</td>

            <td><button class="delete-button">Delete</button></td>
        </tr>


    </table>
    <a href="page2.php" class="custom-button">Enviar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>