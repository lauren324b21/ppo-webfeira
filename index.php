<?php include_once("conexao.php");
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

$result_produto = "SELECT * FROM produto";
$resultado_produto = mysqli_query($conexao, $result_produto);

$total_produtos = mysqli_num_rows($resultado_produto);

$quantidade_pg = 6;

$num_pagina = ceil($total_produtos/$quantidade_pg);

$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

$result_produtos = "SELECT * FROM produto limit $inicio, $quantidade_pg";
$resultado_produtos = mysqli_query($conexao, $result_produtos);
$total_produtos = mysqli_num_rows($resultado_produtos);


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

    <title>Web Feira :: Página Principal</title>
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

        <div class="container">
            <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            <hr class="mt-3">
        </div>

        <main class="flex-fill">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                    <form method="POST" action="pesquisar.php">
                        <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                            <div class="input-group input-group-sm">
                                <input type="text" name="pesquisar" class="form-control" placeholder="Digite aqui o que procura">
                                <button class="btn btn-success">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                            <form class="d-inline-block">
                                <select class="form-select form-select-sm">
                                    <option>Ordenar pelo nome</option>
                                    <option>Ordenar pelo menor preço</option>
                                    <option>Ordenar pelo maior preço</option>
                                </select>
                            </form>                          
                            <?php
                                $pagina_anterior = $pagina-1;
                                $pagina_posterior = $pagina+1;
                            ?>
                            <nav class="d-inline-block me-3">
                                <ul class="pagination pagination-sm my-0">
                                    <li class="page-item">
                                    <?php
                                    if($pagina_anterior != 0) { ?>
                                        <a class="page-link" href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous"> 
                                        <span aria-hidden="true">&laquo;</span>
                                        </a> 
                                    <?php } ?>
                                    </li>
                                    <?php 
					                    //Apresentar a paginacao
					                    for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						                <li class="page-item">
                                        <a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
					                    <?php } ?>
                                    </li>
                                    <?php
                                    if($pagina_posterior <= $num_pagina) { ?>
                                        <a class="page-link" href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous"> 
                                        <span aria-hidden="true">&raquo;</span>
                                        </a> 
                                    <?php  } ?>
                                </li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr mt-3>

                <div class="row g-3">
                <?php while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card text-center bg-light">
                            <a href="#" class="position-absolute end-0 p-2 text-danger">
                                <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                            </a>
                            <a href="produto.html">
                            <?php echo '<img src="'.$row_produtos['imagem'].'" class="card-img-top" />' ?>
                            </a>
                            <div class="card-header">
                            <?php echo $row_produtos['valor']; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_produtos['nome']; ?></h5>
                                <p class="card-text truncar-3l">
                                <?php echo $row_produtos['descricao']; ?>
                                </p>
                            </div>
                            <div class="card-footer">
                            <?php echo '<a href="carrinho.php?acao=add&codigo='.$row_produtos['codigo'].'?>" class="btn btn-success mt-2 d-block">
                                    Adicionar ao Carrinho
                                </a>' ?>
                                <small class="text-success"><?php echo $row_produtos['unidade']; ?> unidades em estoque</small>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
                </div>

                <hr class="mt-3">

                <div class="row pb-3">
                    <div class="col-12">
                        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                            <form class="d-inline-block">
                                <select class="form-select form-select-sm">
                                    <option>Ordenar pelo nome</option>
                                    <option>Ordenar pelo menor preço</option>
                                    <option>Ordenar pelo maior preço</option>
                                </select>
                            </form>
                            <?php
                                $pagina_anterior = $pagina-1;
                                $pagina_posterior = $pagina+1;
                            ?>
                            <nav class="d-inline-block me-3">
                                <ul class="pagination pagination-sm my-0">
                                    <li class="page-item">
                                    <?php
                                    if($pagina_anterior != 0) { ?>
                                        <a class="page-link" href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous"> 
                                        <span aria-hidden="true">&laquo;</span>
                                        </a> 
                                    <?php } ?>
                                    </li>
                                    <?php 
					                    //Apresentar a paginacao
					                    for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						                <li class="page-item">
                                        <a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
					                    <?php } ?>
                                    </li>
                                    <?php
                                    if($pagina_posterior <= $num_pagina) { ?>
                                        <a class="page-link" href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous"> 
                                        <span aria-hidden="true">&raquo;</span>
                                        </a> 
                                    <?php  } ?>
                                </li> 
                                </ul>
                            </nav>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2020 - Web Feira Online Ltda ME<br>
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