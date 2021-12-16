
<?php include_once('conexao.php');
    session_start();
    $email = $_SESSION['email'];
    $sql   = "SELECT * FROM cliente WHERE email='$email'";
    $qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
    $row_clientes    = mysqli_fetch_assoc($qr);
        
    $pedido = $_SESSION['pedido'];
    $sql2   = "SELECT * FROM pedido WHERE codigo='$pedido'";
    $qr2    = mysqli_query($conexao,$sql2) or die (mysqli_error());
    $row_pedidos    = mysqli_fetch_assoc($qr2);
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

    <title>Web Feira :: Fechamento da Compra</title>
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
                            <a href="contato.html" class="nav-link text-white">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="cliente_pedidos.html" class="nav-link text-white">Logado como 
                                <b> <?php echo $row_clientes['nome']; ?> </b>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="carrinho.php" class="nav-link text-white">
                                    <i i class="bi-basket2" style="font-size:24px;line-height:24px;">
                                        <use xlink:href="carrinho.php" />
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
 
        <main class="flex-fill">
            <div class="container text-center">
                <h1>Obrigado!</h1>
                <hr>
                <h3>Anote o número de seu pedido:</h3>
                <h2 class="text-success"><b> 
                    <p>
                        <?php echo ''.$_SESSION['pedido'];'' ?>
                    </p>
                </b></h2>
                <p>Em até 2 horas, seu pedido será entregue. Qualquer dúvida sobre este pedido, entre em contato conosco e informe o número do pedido para que possamos te ajudar.</p>
                <p>Tenha um ótimo dia!</p>
                <p>
                    Atenciosamente,<br>
                    Equipe Web Feira
                </p>
                <p>
                    <a href="indexPDF.php" class="btn btn-success btn-lg"  target="_blank">Gerar Resumo do Pedido</a>
                </p>
                <p>
                    <a href="index.php" class="btn btn-success btn-lg">Voltar à Página Principal</a>
                </p>
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