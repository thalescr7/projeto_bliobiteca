    <header>
        <style>
        /* Estilos para o cabeçalho e menu */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f8f9fa; /* Cor de fundo do cabeçalho */
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
    background-color: #808080; /* Cinza */
    color: white;
}

.dropdown-menu {
    background-color: #808080; /* Cinza */
    border: 2px solid #808080; /* Borda cinza */
}

#sair {
    padding: 8px 16px;
    font-size: 16px;
    text-decoration: none;
    color: white;
    background-color: #dc3545; /* Fundo vermelho */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px;
}

/* Estilização do menu dropdown e dropdown-toggle */
.dropdown-toggle {
    text-decoration: none; /* Remover sublinhado do link */
}
.dropdown-item {
    color: black; /* Cor do texto dos itens do menu dropdown */
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
        <nav>
            <div id="headTitle" onclick="link('index.php')">
                <img src="img/book.png" alt="">
                <h1>Bliobliteca</h1>
            </div>
            <div id="ul">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="livroList.php">Livros</a></li>
                        <li><a class="dropdown-item" href="emprestimo_list.php">Emprestimo</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuarios
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Emprestimo
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <a href="logout.php" id="sair">Sair</a>
    </header>