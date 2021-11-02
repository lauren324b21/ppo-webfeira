
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/ppo-webfeira/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/ppo-webfeira/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ppo-webfeira/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/ppo-webfeira/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ppo-webfeira/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/ppo-webfeira/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ppo-webfeira/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/ppo-webfeira/node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="/ppo-webfeira/node_modules/bootstrap-icons/font/bootstrap-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/ppo-webfeira/css/index.css" type="text/css"/>

    <title>Web Feira :: Login</title>
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
                            <a href="/index.html" class="nav-link text-white">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contato.html" class="nav-link text-white">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/cadastro.html" class="nav-link text-white">Quero Me Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login.html" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="/carrinho.html" class="nav-link text-white">
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
                    <div class="row justify-content-center">
                        <form class="col-sm-10 col-md-8 col-lg-6">    
                            <h1>Identifique-se</h1>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder=" " autofocus>
                                    <label for="email">E-mail</label>
                                 </div>
                        
                                 <div class="form-floating mb-3">
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder=" ">
                                    <label for="senha">Senha</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" value="" id="chkLembrar">
                                    <label for="chkLembrar" class="form-check-label">Lembrar de mim</label>
                                </div>
                        

                            
                        <button type="button" onclick="window.location.href='/ppo-webfeira/processaLogin.php'" class="btn btn-lg btn-success">Entrar</button>
                        

                        <p class="mt-3">
                            <a href="/recuperarsenha.html">Esqueceu a senha?</a> 
                        </p>

                        <p class="mt-3">
                            <a href="/cadastro.html">Ou cadastre-se</a>
                        </p>
                    </form>
                </div>
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
                        <a href="/privacidade.html" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="/termos.html" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="/quemsomos.html" class="text-decoration-none text-dark">
                            Quem Somos
                        </a><br>
                        <a href="/trocas.html" class="text-decoration-none text-dark">
                            Trocas e Devoluções
                        </a>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/contato.html" class="text-decoration-none text-dark">
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
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>