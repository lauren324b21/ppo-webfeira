<?php
    include('conexao.php');

    $emailLogin = mysqli_real_escape_string($conexao, $_POST['email']);
    $senhaLogin = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select email, codigo from cliente where email = '{$emailLogin}' and senha = '{$senhaLogin}'";

    $result = mysqli_query($conexao,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['email'] = $email;
        header('Location: gcliente_pedidos.html');
        exit();
    } else {
        header('Location: erro.html');
        exit();
    }

?>
