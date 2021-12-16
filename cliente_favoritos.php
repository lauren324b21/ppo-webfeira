<?php include_once("conexao.php");
    
    session_start();
    if(!isset($_SESSION['favoritos'])){
        $_SESSION['favoritos'] = array();
    }

    $email = $_SESSION['email'];
    $sql   = "SELECT * FROM cliente WHERE email='$email'";
    $qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
    $row_clientes    = mysqli_fetch_assoc($qr);

    //Adicionar
    if(isset($_GET['acao'])){
        
        if($_GET['acao'] == 'add'){
            $codigo = intval($_GET['codigo']);
            if(!isset($_SESSION['favoritos'][$codigo])){
                $_SESSION['favoritos'][$codigo] = 1;
            } else { 
                $_SESSION['favoritos'][$codigo] += 1;
            }
        }
     
    //Remover
     if($_GET['acao'] == 'del'){
        $codigo = intval($_GET['codigo']);
        if(isset($_SESSION['favoritos'][$codigo])){
            unset($_SESSION['favoritos'][$codigo]);
        }
    }
    }
    //print_r($_SESSION['favoritos']);
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

    <title>Web Feira :: Área do Cliente :: Favoritos</title>
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
                    <div class="row g-3">
                    <?php echo '<a href="index.php" class="btn btn-success mt-2 d-block">
                                            Continuar Comprando
                                        </a>' ?>    
                        <?php
                            $total = 0;
                            if(count($_SESSION['favoritos']) == 0){
                            } else {    
                                foreach($_SESSION['favoritos'] as $codigo => $qtd){
                                    $sql   = "SELECT * FROM produto WHERE codigo='$codigo'";
                                    $qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
                                    $row_produtos    = mysqli_fetch_assoc($qr);
                        
                        ?>
                        
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card text-center bg-light">
                            <?php echo '<img src="'.$row_produtos['imagem'].'" class="card-img-top" />' ?>
                                <div class="card-header">
                                    <?php echo number_format($row_produtos['valor'], 2, ',', '.'); ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_produtos['nome']; ?></h5>
                                    <p class="card-text truncar-3l">
                                    <?php echo $row_produtos['descricao']; ?>
                                </p>                              
                                </div>
                                <div class="card-footer">
                                        <?php echo '<a href="carrinho.php?acao=add&codigo='.$row_produtos['codigo'].'?>" class="btn btn-success mt-2 d-block">
                                            Adicionar à cestinha
                                        </a>' ?>
                                         <?php echo '<a href="?acao=del&codigo='.$row_produtos['codigo'].'" class="btn btn-success mt-2 d-block" style="font-size: 16px; line-height: 16px;">
                                            Remover dos favoritos
                                         </a>'?>
                                        <small class="text-success"> <?php echo $row_produtos['unidade']; ?></small>
                                    </div>
                        </div>
                        </div>
                        
                            <?php
                        }
                    }
                ?>
            </div>
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