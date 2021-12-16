<?php
    include_once("conexao.php");
    
    session_start();
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $numero = $_POST['numero'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $datanascimento = $_POST['datanascimento'];
    
    $sql = "insert into cliente (nome,email,senha,cpf,telefone,numero,rua,cidade,estado,datanascimento) 
    values ('$nome','$email','$senha','$cpf','$telefone','$numero','$rua','$cidade','$estado','$datanascimento')";
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
            header('Location: login.php');

            } else {
                echo  "<script>alert('Houve um erro! Email ou CPF já existentes!');window.location.href = 'cadastro.php';</script>";
        exit();
            }
        ?>
    </script>
    </main>
    
</body>