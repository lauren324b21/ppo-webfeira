<?php include_once("conexao.php");
    
    session_start();
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array();
    }
    $email = $_SESSION['email'];
    $sql   = "SELECT * FROM cliente WHERE email='$email'";
    $qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
    $row_clientes    = mysqli_fetch_assoc($qr);
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
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">

    <title>WebFeira :: Fechamento da Compra</title>
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
                                <a href="cliente_pedidos.html" class="nav-link text-white">
                                    <?php echo 'Logado como <b>'.$row_clientes['nome'].'</b>' 
                                    ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                 <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0"
                                    title="produto(s) no carrinho"><small></small></span>
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
            <div class="container">
                <h1>Confira os Itens</h1>
                <h4>Confira os itens e clique em <b>Continuar</b> para prosseguir para a <b>seleção do endereço de entrega</b>.</h4>
                <?php
                $total = 0;
                    if(count($_SESSION['carrinho']) == 0){
                        echo '<h5><a href="#" class="text-decoration-none text-success">
                        Carrinho Vazio </a></h5>';
                    } else {
                        
                        is_numeric($total);
                        foreach($_SESSION['carrinho'] as $codigo => $qtd){
                            $sql   = "SELECT * FROM produto WHERE codigo='$codigo'";
                            $qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
                            $row_produtos    = mysqli_fetch_assoc($qr);
                        
                            $nome  = $row_produtos['nome'];
                            $valor = number_format($row_produtos['valor'], 2, ',', '.');
                            $sub   = number_format($row_produtos['valor'] * $qtd , 2, ',', '.');
                            
                            $total += $row_produtos ['valor'] * $qtd;
                        ?>
                            <ul class="list-group mb-3">
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                <?php echo '<img src="'.$row_produtos['imagem'].'" class="card-img-top" />' ?>
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-success">
                                    <?php echo $row_produtos['nome']; ?></a></b>
                                </h4>
                                <h5>
                                <?php echo $row_produtos['descricao']; ?>
                                </h5>
                                
                                <b><?php echo $qtd;?>  unidade(s) <br>
                                <?php echo number_format($row_produtos['valor'] * $qtd , 2, ',', '.'); ?>
                                </b> 
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                            </div>
                        </div>
                    </li>
                </ul>
            <?php
                        }
                    }
                ?>
                
                <div class="text-end">
                    <a href="carrinho.php" class="btn btn-outline-success btn-lg mb-3">
                                    Voltar à cestinha
                    </a>
                    <?php 
                        if($total <> 0){
                            $total = number_format($total, 2, ',', '.');
                            echo '<a class="btn btn-outline-success btn-lg mb-3">Valor total: '.$total.'</a>';
                        } else {
                                    
                        }              
                    ?>
                    <a href="fechamento_endereco.php" class="btn btn-success btn-lg ms-2 mb-3">Continuar</a>
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