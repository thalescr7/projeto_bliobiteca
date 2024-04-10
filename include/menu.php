<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        padding: 10px;
    }


    #headTitle {
        display: flex;
        align-items: center;
    }

    #ul {
        display: flex;
        align-items: center;
    }

    .menu {
        display: flex;
        list-style-type: none;
    }

    .menu-item {
        margin-right: 20px;
    }

    .btn {
        background-color: #808080;
        color: white;
    }

    .dropdown-menu {
        background-color: #808080;
        border: 2px solid #808080;
    }

    #sair {
        padding: 8px 16px;
        font-size: 16px;
        text-decoration: none;
        color: white;
        background-color: #dc3545;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px;
    }

    /* Estilização do menu dropdown e dropdown-toggle */
    .dropdown-toggle {
        text-decoration: none;
        /* Remover sublinhado do link */
    }

    .dropdown-item {
        color: black;
        /* Cor do texto dos itens do menu dropdown */
    }


    #sair {
        padding: 8px 16px;
        font-size: 16px;
        text-decoration: none;
        color: white;
        background-color: #dc3545;
        /* Fundo vermelho para o botão Sair */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px;
        float: right;
        /* Alinhar à direita */
    }
</style>
<header>
    <nav>
        <div id="headTitle" onclick="link('index.php')">
            <img src="img/book.png" alt="">
            <h1>Thales Monobola</h1>
        </div>
        <div id="ul">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produtos
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="livroList.php">Livros</a></li>
                    <li><a class="dropdown-item" href="autorList.php">Autor</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuarios
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="clienteList.php">Clientes</a></li>
                    <li><a class="dropdown-item" href="funcioList.php">Funcionarios</a></li>
                </ul>
            </div>
            <a href="empresListAll.php">
                Emprestimo
            </a>

        </div>
    </nav>
    <a href="logout.php" id="sair">Sair</a>
</header>