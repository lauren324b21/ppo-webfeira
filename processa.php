<?php
    include_once("conexao.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
   

    $sql = "insert into cliente (nome,email,senha,cpf,telefone,endereco) 
    values ('$nome','$email','$senha','$cpf','$telefone','$endereco')";
    $salvar = mysqli_query($conexao,$sql);

    $linhas = mysqli_affected_rows($conexao); 

    mysqli_close($conexao);
?>

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
        <h1>Confirmação de Cadastro</h1>
        <?php
            if($linhas == 1){
            print "Cadastro efetuado com Sucesso!";
            header('Location: alterarCliente.html');

            } else {
                print "Houve um erro! <br>Email ou cpf já existentes";
            }
        ?>
    </script>
    </main>
    
</body>