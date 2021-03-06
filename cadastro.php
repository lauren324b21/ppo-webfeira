<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Costumer</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>


    <main class="container">
        <h1>Criar Conta</h1>
        <div class="social-media">
            <a href="#">
                <img src="assets/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="assets/facebook.png" alt="Facebook">
            </a>
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>


         <script>
        function salvarFormulario(){
           if (localStorage.cont) {
              localStorage.cont = Number(localStorage.cont)+1;
           } else {
              localStorage.cont = 1;
           }
           
           
           dados = document.getElementById('nome').value + ';'  + document.getElementById('cpf').value 
               + ';'  + document.getElementById('nascimento').value
               + ';'  + document.getElementById('endereco').value
               + ';'  + document.getElementById('telefone').value
                      + document.getElementById('email').value;
               localStorage.setItem("dados_"+localStorage.cont,dados);
        }
    </script>


        

        <form method="post" action="processa.php">

            <div class="input-field">
                <label for="nome">
                    <span>Nome</span>
                    <input type="text" id="nome" name="nome" maxlength="40" required autofocus>
                </label>
    
                <label for="email">
                    <span>E-mail</span>
                    <input type="email" id="email" name="email" maxlength="50" required>
                </label>
    
                <label for="senha">
                    <span>Senha</span>
                    <input type="password" id="senha" name="senha" maxlength="30" required>
                </label>

                <label for="senha">
                    <span>Repetir senha</span>
                    <input type="password" id="senha" name="senha" maxlength="30" required>
                </label>

                <label for="cpf">
                    <span>CPF</span>
                    <input type="number" id="cpf" name="cpf" maxlength="11" required>
                </label>
    
                <label for="nascimento">
                    <span>Data de nascimento</span>
                    <input type="date" id="nascimento" name="nascimento" required>
                </label>
    
    
                <label for="endereco">
                    <span>Endereço</span>
                    <input type="text" id="endereco" name="endereco" maxlength="40" required>
                </label>
    
                <label for="telefone">
                    <span>Telefone</span>
                    <input type="tel" id="telefone" name="telefone" maxlength="11" required>
                </label>           
                
             
        <button id="button">Cadastrar</button>
           
        </form>
    </main>
</body>