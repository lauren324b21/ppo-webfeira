<?php
    include_once("conexao.php");
    
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
       
    $sql = "insert into produtores (nome,cnpj,endereco,telefone) 
    values ('$nome','$cnpj','$endereco','$telefone')";
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
            } else {
                print "Houve um erro! CNPJ existente";
            }
        ?>
    </script>
    </main>
    
</body>