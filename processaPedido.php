<?php include('conexao.php');
    
    session_start();
    $email = $_SESSION['email'];
    $sql1   = "SELECT * FROM cliente WHERE email='$email'";
    $qr1    = mysqli_query($conexao,$sql1) or die (mysqli_error());
    $row_clientes    = mysqli_fetch_assoc($qr1);
    
    $nome = $row_clientes['nome'];
    $rua = $row_clientes['rua'];
    $data = date('Y-m-d');
    
    $total = 0;
    foreach($_SESSION['carrinho'] as $codigo => $qtd){
        $sql2   = "SELECT * FROM produto WHERE codigo='$codigo'";
        $qr2    = mysqli_query($conexao,$sql2) or die (mysqli_error());
        $row_produtos    = mysqli_fetch_assoc($qr2);
    
        $nomeP  = $row_produtos['nome'];
        $v = $row_produtos['valor'];
        $valor = number_format($row_produtos['valor'], 2, ',', '.');
        $sub   = number_format($row_produtos['valor'] * $qtd , 2, ',', '.');
        
        $total += $row_produtos ['valor'] * $qtd;
    }
    
    $sql = "insert into pedido (nomeCliente,rua,datapedido,valorTotal) 
        values ('$nome','$rua','$data','$total')";
    
    $sql3          = "SELECT * FROM pedido WHERE nomeCliente='$nome'";
    $qr3           = mysqli_query($conexao, $sql3) or die (mysqli_error($conexao));
    $row_pedido    = mysqli_fetch_assoc($qr3);
    $_SESSION['pedido'] = $row_pedido['codigo'];

    $salvar = mysqli_query($conexao,$sql);
    $linhas = mysqli_affected_rows($conexao);
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
            header('Location: fechamento_pedido.php');
            } else {
                print "Houve um erro! <br>Email ou cpf já existentes";
            }
        ?>
    </script>
    </main>
    
</body>