<?php
    include_once("conexao.php");
    include_once("processaLogin.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
   
    $query = "alter table cliente alter column nome = '{$nome}' where senha = '{$senhaLogin}'";
    $query = "alter table cliente alter column email = '{$email}' where senha = '{$senhaLogin}'";
    $query = "alter table cliente alter column senha = '{$senha}' where senha = '{$senhaLogin}'";
    $query = "alter table cliente alter column telefone = '{$telefone}' where senha = '{$senhaLogin}'";
    $query = "alter table cliente alter column endereco = '{$endereco}' where senha = '{$senhaLogin}'";

    $result = mysqli_query($conexao,$query);

    $row = mysqli_num_rows($result);

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
            if($row == 1){
            print "Alteração efetuada com Sucesso!";
            } else {
                print "Houve um erro! Tente novamente";
            }
        ?>
    </script>
    </main>
    
</body>