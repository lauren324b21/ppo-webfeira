<?php
    include('conexao.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select email, codigo from cliente where email = '{$email}' and senha = '{$senha}'";

    $result = mysqli_query($conexao,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['email'] = $email;
        header('Location: cliente_pedidos.html');
        exit();
    } else {
        header('Location: erro.html');
        exit();
    }

?>
