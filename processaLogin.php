<?php
    include('conexao.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    session_start();
    $_SESSION['email'] = $email;

    $query = "select email, codigo from cliente where email = '{$email}' and senha = '{$senha}'";

    $result = mysqli_query($conexao,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit();
    } else {
        echo  "<script>alert('Email ou Senha inválidos!');window.location.href = 'login.php';</script>";
        exit();
    }

?>
