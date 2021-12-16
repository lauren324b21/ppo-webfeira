<?php include_once("conexao.php");
 
session_start();
if($_SESSION['email'] <> null){
$email = $_SESSION['email'];
$sql   = "SELECT * FROM cliente WHERE email='$email'";
$qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
$row_clientes    = mysqli_fetch_assoc($qr);
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Web Feira :: Área do Cliente :: Dados Pessoais</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <strong>Web Feira</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-white">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="contato.php" class="nav-link text-white">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                                    <?php
                                    if($_SESSION['email'] <> null){
                                    echo '
                                    <li class="nav-item">
                                    <a href="cliente_dados.php" class="nav-link text-white">
                                   Logado como <b>'.$row_clientes['nome'].'</b>
                                    </a>
                                    </li>';
                                    echo  '
                                    <li class="nav-item">
                                    <a href="login.php" class="nav-link text-white">
                                   Sair
                                     </a>
                                     </li>';
                                    } else {
                                       echo  '
                                       </li>
                                       <a href="cadastro.php" class="nav-link text-white">
                                       Quero me cadastrar
                                        </a>
                                        </li>';
                                        echo  '
                                        </li>
                                        <a href="login.php" class="nav-link text-white">
                                       Entrar
                                         </a>
                                         </li>';
                                    } 
                                    ?>
                            <li class="nav-item">
                            <?php
                                    if($_SESSION['email'] <> null){
                                    echo '<a href="carrinho.php" class="nav-link text-white">
                                    <i i class="bi-basket2" style="font-size:24px;line-height:24px;">
                                        <use xlink:href="carrinho.php" />
                                    </i>';
                                    } else {
                            
                                    } 
                                    ?>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
 
        <main class="flex-fill">
            <div class="container">
                <h1>Minha Conta</h1>
                <div class="row gx-3">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="cliente_dados.php" class="list-group-item list-group-item-action bg-success text-light">
                                <i class="bi-person fs-6"></i> Dados Pessoais
                            </a>
                            <a href="cliente_contatos.php" class="list-group-item list-group-item-action">
                                <i class="bi-mailbox fs-6"></i> Contatos
                            </a>
                            <a href="cliente_endereco.php" class="list-group-item list-group-item-action">
                                <i class="bi-house-door fs-6"></i> Endereço
                            </a>
                            <a href="cliente_pedidos.php" class="list-group-item list-group-item-action">
                                <i class="bi-bicycle fs-6"></i> Pedidos
                            </a>
                            <a href="cliente_favoritos.php" class="list-group-item list-group-item-action">
                                <i class="bi-heart fs-6"></i> Favoritos
                            </a>
                            <a href="cliente_senha.php" class="list-group-item list-group-item-action">
                                <i class="bi-lock fs-6"></i> Alterar Senha
                            </a>
                            <a href="login.php" class="list-group-item list-group-item-action">
                                <i class="bi-door-open fs-6"></i> Sair
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <form action="loginConfirmacao.php">
                        <div class="clearfix"></div>
                                <div class="form-floating mb-3 col-md-4">
                                <?php echo '<a class="btn btn-outline-success btn-lg">Nome: '.$row_clientes['nome'].'</a>'; ?>
                                </div>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control" type="text" id="nome" name="nome" maxlength="40" required placeholder=" " />
                                    <label for="txtComplemento">Novo Nome </label>
                                </div>
                                <div class="form-floating mb-3 col-md-8">
                                <?php echo '<a class="btn btn-outline-success btn-lg">Data de nascimento: '.$row_clientes['datanascimento'].'</a>'; ?>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                <input class="form-control" type="date" id="txtDataNascimento" placeholder=" " />
                                <label for="txtDataNascimento">Data de Nascimento</label>
                            </div>
                            <button type="button" onclick="window.location.href='loginConfirmacao.php'"
                                class="btn btn-lg btn-success">Alterar Dados</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2021 - WebFeira Ltda ME<br>
                        Sítio Neves - Zona Rural, SN, Jucati/PE <br>
                        CPNJ 32.001.533/0001-84
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="privacidade.php" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="termos.php" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="quemsomos.php" class="text-decoration-none text-dark">
                            Quem Somos
                        </a><br>
                        <a href="trocas.php" class="text-decoration-none text-dark">
                            Trocas e Devoluções
                        </a>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="contato.php" class="text-decoration-none text-dark">
                            Contato pelo Site
                        </a><br>
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                            email@dominio.com
                        </a><br>
                        Telefone: <a href="phone:87981189959" class="text-decoration-none text-dark">
                            
                                (87) 98118-9959
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>