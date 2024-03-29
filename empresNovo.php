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
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/novo.css">
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
</head>

<body>
    <?php include("include/menu.php"); ?>
    <main>
        <div class="container">
            <h2>Empréstimo > Novo</h2>
            <button class="voltar"><a href="empresList.php">Voltar</a></button>
            <div class="row mt-4">
                <div class="col-md-12">
                    <form action="empresNovoPost.php" method="POST">
                        <div class="row mb-3">
                            <div class="select col-6">
                                <label for="livro" class="form-label">Livro</label>
                                <select name="livroId" id="livro" required>
                                    <?php
                                        foreach(LivroRepository::listAll() as $livro){
                                             if(EmprestimoRepository::countByLivros($livro->getId) != 0){ 
                                    ?>
                                            <option value="<?php echo $livro->getId();?>">
                                                <?php echo $livro->getTitulo(); ?>
                                            </option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <div class="select col-6">
                                <label for="cliente" class="form-label">Cliente</label>
                                <select name="clienteId" id="cliente" required>
                                    <?php
                                        foreach(ClienteRepository::listAll() as $cliente){
                                            if(EmprestimoRepository::countByClientes($cliente->getId) == 0){
                                    ?>
                                        <option value="<?php echo $cliente->getId();?>">
                                            <?php echo $cliente->getNome(); ?>
                                        </option>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>
                        <div class="md-3 mb-3">
                            <label for="datepicker" class="form-label">Data de Vencimento</label>
                            <input type='text' name="dataVencimento" id="datepicker" class="form-control" required placeholder='dd/mm/aaaa'>
                        </div>
                        <div class="md-3">
                            <button type="submit" class="enviar">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="moment.js"></script>
<script src="pikaday.js"></script>
<script>
    var picker = new Pikaday({
    field: document.getElementById('datepicker'),
    minDate: new Date(1900, 0, 1),
    yearRange: [1900, new Date().getFullYear()],
    toString(date, format = 'DD/MM/YYYY') {
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    },
    i18n: {
        previousMonth: 'Mês anterior',
        nextMonth: 'Próximo mês',
        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
    },
    onSelect: function() {
        console.log(this.getMoment().format('DD/MM/YYYY'));
    }
});
</script>

</html>