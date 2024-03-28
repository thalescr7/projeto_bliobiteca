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
  <title>Emprestimo Listagem</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style/listagensIndx.css">
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <?php include("include/menu.php"); ?>
  <main>
    <div class="container">
      <div id="listagem">
        <h2>Emprestimo > Listagem</h2>
        <button class="novo" onclick="link('empreNovo.php')">Novo Emprestimo</button>
      </div>
      <button class="voltar"><a href="index.php">Voltar</a></button>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Livro</th>
              <th>Cliente</th>
              <th>Data Vencimento</th>
              <th>Data Devolução</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
              <?php
                foreach(EmprestimoRepository::listAll() as $empres){
              ?>
              <tr>
                <td><?php echo $empres->getId(); ?></td>
                <td>
                    <?php 
                        $livro = LivroRepository::get($empres->getLivroId());
                        echo $empres->getLivroId()." - ". $livro->getTitulo(); 
                    ?>
                </td>
                <td>
                    <?php 
                        $cliente = ClienteRepository::get($empres->getClienteId());
                        echo $empres->getClienteId()." - ". $cliente->getNome(); 
                    ?>
                </td>
                <td><?php echo $empres->getDataVencimento("d/m/Y"); ?></td>
                <td><?php echo $empres->getDataDevolucao("d/m/Y"); ?></td>
                <td>
                  <a href="empresEditar.php?id=<?php echo $empres->getId(); ?>" id="editar">Editar</a>
                  <?php  ?>
                    <a href="empresExcluir.php?id=<?php echo $empre->getId(); ?>" id="deletar">Deletar</a>
                  <?php?>
                </td>
              </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <script src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>