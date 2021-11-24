<?php include_once("conexao.php");
    
    session_start();
    if(!isset($_SESSION['itens'])){
        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho"){
        $idProduto = $_GET['codigo'];
        if(!isset ($_SESSION['itens'][$idProduto])){
            $_SESSION['itens'][$idProduto] = 1;
        } else {
            $_SESSION['itens'][$idProduto] += 1;
        }
    }
    
     if(count($_SESSION['itens']) == 0){ 
        echo 'carrinho vazio';
    } else {
        foreach($_SESSION['itens'] as $idProduto => $unidade){
            $select = $conexao -> prepare("SELECT * FROM produto WHERE codigo=$idProduto");
            $select -> bind_param(1,$idProduto);
            $select -> execute();
            $produtos = $select -> fetchAll();
            echo 
                produtos[0]["nome"].'<br/>';
        }
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
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Web Feira :: Carrinho de Compras</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <strong>Web Feira</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link text-white">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="contato.html" class="nav-link text-white">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="cadastro.html" class="nav-link text-white">Quero Me Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.html" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-success position-absolute ms-4 mt-0"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="carrinho.html" class="nav-link text-white">
                                    <svg class="bi" width="24" height="24" fill="currentColor">
                                        <use xlink:href="/bi.svg#basket2" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
            <div class="container">
                <h1>Carrinho de Compras</h1>
                <ul class="list-group mb-3">
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                    <img src="img/produtos/000008.jpg" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-success">
                                            Abacate Manteiga</a></b>
                                </h4>
                                <h5>
                                    Abacate manteiga da melhor qualidade possível e muito fresco.
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <div class="input-group">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border-dark" value="4">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-up" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <button class="btn btn-outline-success border-dark btn-sm" type="button">
                                        <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-secondary">Valor kg: R$ 3,99</small><br>
                                    <span class="text-dark">Valor Item: R$ 15,96</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                    <img src="img/produtos/000003.jpg" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-success">
                                            Abacate Manteiga</a></b>
                                </h4>
                                <h5>
                                    Abacate manteiga da melhor qualidade possível e muito fresco.
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <div class="input-group">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border-dark" value="4">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-up" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <button class="btn btn-outline-success border-dark btn-sm" type="button">
                                        <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-secondary">Valor kg: R$ 3,99</small><br>
                                    <span class="text-dark">Valor Item: R$ 15,96</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                    <img src="img/produtos/000006.jpg" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-success">
                                            Abacate Manteiga</a></b>
                                </h4>
                                <h5>
                                    Abacate manteiga da melhor qualidade possível e muito fresco.
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <div class="input-group">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border-dark" value="4">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-up" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <button class="btn btn-outline-success border-dark btn-sm" type="button">
                                        <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-secondary">Valor kg: R$ 3,99</small><br>
                                    <span class="text-dark">Valor Item: R$ 15,96</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                    <img src="img/produtos/000012.jpg" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-success">
                                            Abacate Manteiga</a></b>
                                </h4>
                                <h5>
                                    Abacate manteiga da melhor qualidade possível e muito fresco.
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <div class="input-group">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border-dark" value="4">
                                    <button class="btn btn-outline-dark btn-sm" type="button">
                                        <i class="bi-caret-up" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                    <button class="btn btn-outline-success border-dark btn-sm" type="button">
                                        <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                                    </button>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-secondary">Valor kg: R$ 3,99</small><br>
                                    <span class="text-dark">Valor Item: R$ 15,96</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="text-end">
                            <h4 class="text-dark mb-3">
                                Valor Total: R$ 63,84
                            </h4>
                            <a href="index.html" class="btn btn-outline-success btn-lg">
                                Continuar Comprando                            
                            </a>
                            <a href="fechamento_itens.html" class="btn btn-success btn-lg ms-2 mt-xs-3">Fechar Compra</a>
                        </div>
                    </li>
                </ul>
            </div>
        </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2020 - Web Feira Ltda ME<br>
                        Rua Virtual Inexistente, 171, Compulândia/PC <br>
                        CPNJ 99.999.999/0001-99
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="privacidade.html" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="termos.html" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="quemsomos.html" class="text-decoration-none text-dark">
                            Quem Somos
                        </a><br>
                        <a href="trocas.html" class="text-decoration-none text-dark">
                            Trocas e Devoluções
                        </a>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="contato.html" class="text-decoration-none text-dark">
                            Contato pelo Site
                        </a><br>
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                            email@dominio.com
                        </a><br>
                        Telefone: <a href="phone:28999990000" class="text-decoration-none text-dark">
                            (28) 99999-0000
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>