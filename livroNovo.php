<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/novo.css">
</head>

<body>
    <?php include("include/menu.php") ?>
    <main>
        <div class="container">
            <h2>LIVRO > Novo</h2>
            <button class="voltar"><a href="livroList.php">Voltar</a></button>
            <div class="row mt-4">
                <div class="col-md-12 m-auto">
                    <form action="livroNovoPost.php" method="POST">
                        <div class="md-3 mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                        <div class="row mb-3">
                            <div class="md-3 col-4">
                                <label for="ano" class="form-label">Ano</label>
                                <input type="text" name="ano" id="ano" class="form-control">
                            </div>
                            <div class="md-3 col-4">
                                <label for="genero" class="form-label">Genero</label>
                                <input type="text" name="genero" id="genero" class="form-control">
                            </div>
                            <div class="md-3 col-4">
                                <label for="isbn" class="form-label">Isbn</label>
                                <input type="text" name="isbn" id="isbn" class="form-control">
                            </div>
                        </div>
                        <div class="md-3" class='select'>
                            <label for="autor" class="form-label">Autor</label>
                            <select name="autor" id="autor">
                                <?php
                                    foreach(AutorRepository::listAll() as $autor){
                                ?>
                                <option value="<?php echo $autor->getId();?>">
                                        <?php echo $autor->getNome() ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div> 
                        <div class="md-3">
                            <button type="submit" class="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>