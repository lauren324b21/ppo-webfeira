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

    <title>WebFeira :: Política de Trocas e Devoluções</title>
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
                            <li class="nav-item">
                                    <?php
                                    if($_SESSION['email'] <> null){
                                    echo '<a href="cliente_pedidos.html" class="nav-link text-white">
                                   Logado como <b>'.$row_clientes['nome'].'</b>
                                    </a>';
                                    } else {
                                       echo  '<a href="cadastro.php" class="nav-link text-white">
                                       Quero me cadastrar
                                        </a>';
                                    } 
                                    ?>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                            <?php if($_SESSION['email'] <> null){
                                    echo '<a href="carrinho.php" class="nav-link text-white">
                                    <i i class="bi-basket2" style="font-size:24px;line-height:24px;">
                                        <use xlink:href="carrinho.php" />
                                    </i>';
                                    } else {
                                       
                                    } 
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
            <div class="container">
                <h1>Política de Trocas e Devoluções</h1>
                <hr>
                <p>
                    A WebFeira utiliza tecnologia de ponta para a fabricação de seus produtos, primando pela qualidade e satisfação de seus clientes. Pelo respeito e para que seja mantida a credibilidade conquistada junto aos seus consumidores, a empresa criou uma política de troca e devolução de acordo com o Código de Defesa do Consumidor, e preocupada para que você (cliente) obtenha uma negociação eficaz, ágil e principalmente satisfatória.
                </p>
                <p>
                    Caso opte pelo contato via correio eletrônico ou telefônico, será encaminhado a você o formulário para preenchimento e envio junto à(s) peça(s). O produto devolvido sem esse formulário e/ou sem a comunicação ao SAC será reenviado sem consulta prévia.
                </p>
                <p>
                    Ao efetuar o processo de devolução/troca o cliente deverá, no verso da nota fiscal a ser devolvida/trocada, informar o motivo da devolução/troca, o nome de quem está devolvendo, CPF e a data da devolução.
                </p>
                <p>
                    Caso receba algum produto com a embalagem violada, recuse-o no ato da entrega.
                </p>
                <p>
                    Se a quantidade recebida divergir da nota fiscal, entre em contato conosco através de um dos canais disponibilizados no rodapé deste site.
                </p>
                <p>
                    *ATENÇÃO: Para efetuar o processo de troca, é necessário estar logado.
                </p>
                <h5>Devolução por Arrependimento/Desistência</h5>
                <p>
                    Se ao receber o produto, você resolver devolvê-lo por arrependimento, deverá fazê-lo em até sete dias corridos, a contar da data de recebimento, observando as seguintes condições:
                </p>
                <ul>
                    <li>O produto não poderá ter indícios de uso.</li>
                    <li>O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal, etiquetas, tags (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.</li>
                    <li>Ao efetuar o processo de devolução, o cliente deverá, no verso da nota fiscal a ser devolvida, informar o motivo da recusa/devolução, o nome e o CPF de quem está devolvendoe a data da devolução.
                    </li>
                </ul>
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