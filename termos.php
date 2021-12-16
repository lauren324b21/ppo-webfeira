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
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">

    <title>WebFeira :: Termos de Uso</title>
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
                <h2>1. Termos</h2>
                <p>Ao acessar ao site <a href='http://www.dominio.com'>WebFeira</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
                <h2>2. Uso de Licença</h2>
                <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site WebFeira, apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
                <ol>
                    <li>modificar ou copiar os materiais; </li>
                    <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial); </li>
                    <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site WebFeira;
                    </li>
                    <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou </li>
                    <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.
                    </li>
                </ol>
                <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por WebFeira a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrônico ou impresso.</p>
                <h2>3. Isenção de responsabilidade</h2>
                <ol>
                    <li>Os materiais no site da WebFeira são fornecidos 'como estão'. WebFeira não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</li>
                    <li>Além disso, o WebFeira não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
                </ol>
                <h2>4. Limitações</h2>
                <p>Em nenhum caso o WebFeira ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em WebFeira, mesmo que WebFeira ou um representante autorizado da WebFeira tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
                <h2>5. Precisão dos materiais</h2>
                <p>Os materiais exibidos no site da WebFeira podem incluir erros técnicos, tipográficos ou fotográficos. WebFeira não garante que qualquer material em seu site seja preciso, completo ou atual. WebFeira pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, WebFeira não se compromete a atualizar os materiais.</p>
                <h2>6. Links</h2>
                <p>O WebFeira não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por WebFeira do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
                </p>
                <h3>Modificações</h3>
                <p>O WebFeira pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
                <h3>Lei aplicável</h3>
                <p>Estes termos e condições são regidos e interpretados de acordo com as leis do WebFeira e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
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