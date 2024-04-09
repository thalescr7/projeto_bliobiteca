<?php
include_once('include/factory.php');

if (!Auth::isAuthenticated()) {
  header("Location: funcioList.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcionario Listagem</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style/listagensIndx.css">
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <?php include("include/menu.php") ?>
  <main>
    <div class="container">
      <div id="listagem">
        <h2>FUNCIONARIO > LISTAGEM</h2>
        <button class="novo" onclick="link('funcioNovo.php')">Novo Funcionario</button>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach (FuncionarioRepository::listAll() as $funcionario) {
            ?>
              <tr>
                <td><?php echo $funcionario->getId(); ?></td>
                <td><?php echo $funcionario->getNome(); ?></td>
                <td><?php echo $funcionario->getCpf(); ?></td>
                <td><?php echo $funcionario->getTelefone(); ?></td>
                <td><?php echo $funcionario->getEmail(); ?></td>

                <td>
                  <a href="funcioEditar.php?id=<?php echo $funcionario->getId(); ?>" id="editar">Editar</a>
                  <a href="#" id="deletar">Deletar</a>
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