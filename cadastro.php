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

    <link rel="stylesheet" href="/ppo-webfeira/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ppo-webfeira/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ppo-webfeira/css/index.css">
    
    <title>Web Feira :: Cadastro</title>
</head>

<body style="min-width:372px;">
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
                                <a href="cadastro.php" class="nav-link text-white"> Quero me cadastrar 
                                <b>  </b>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white">Entrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <main class="flex-fill">
        <div class="container">
                <h1>Informe seus dados</h1>
                <hr>
                <form class="mt-3"  method="post" action="processa.php">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Dados Pessoais</legend>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="nome" name="nome" maxlength="40" placeholder=" " required autofocus />
                                    <label for="nome">Nome</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="text" id="cpf" name="cpf" placeholder=" " maxlength="11" required/>
                                    <label for="cpf">CPF</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="date" id="datanascimento" name="datanascimento" placeholder=" " />
                                    <label for="txtDataNascimento" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                                        Nascimento</label>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control" type="email" id="email" name="email" maxlength="50" required placeholder=" " />
                                    <label for="email">E-mail</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6">
                                    <input class="form-control" placeholder="telefone" type="tel" id="telefone" name="telefone" maxlength="11" required />
                                    <label for="telefone">Telefone</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Endereço</legend>
                                <div class="form-floating mb-3 col-md-6 col-lg-4">
                                    <input class="form-control" type="text" name="cep" required pattern="\d{5}-\d{3}" placeholder=" " />
                                    <label for="cep">CEP</label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-floating mb-3 col-md-4">
                                    <input class="form-control"type="text" id="numero" name="numero" maxlength="40" required placeholder=" " />
                                    <label for="txtComplemento">Número</label>
                                </div>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control"type="text" id="rua" name="rua" maxlength="40" required placeholder=" " />
                                    <label for="txtComplemento">Rua</label>
                                </div>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control"type="text" id="cidade" name="cidade" maxlength="40" required placeholder=" " />
                                    <label for="txtComplemento">Cidade</label>
                                </div>
                                <div class="form-floating mb-3 col-md-4">
                                    <input class="form-control"type="text" id="estado" name="estado" maxlength="40" required placeholder=" " />
                                    <label for="txtComplemento">Estado</label>
                                </div>
                              
                            </fieldset>
                            <fieldset class="row gx-3">
                                <legend>Senha de Acesso</legend>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" type="password" id="senha" name="senha" maxlength="8" required placeholder=" " />
                                    <label for="senha">Senha</label>
                                </div>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" type="password" id="txtConfirmacaoSenha" placeholder=" " />
                                    <label class="form-label" for="txtConfirmacaoSenha">Confirmação da Senha</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" name="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Desejo receber informações sobre promoções.
                        </label>
                    </div>
                    <div class="mb-3 text-left">
                        <button id="button" class="btn btn-lg btn-success" 
                           >Criar meu cadastro</button>
                    </div>
                </form>
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