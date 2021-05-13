<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from cliente where endereco like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

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
        <h1>Consultas</h1>
        <form method="get" action="">
            Filtrar: <input type="text" name="filtro" class="campo" require autofocus>
            <input type="submit" value="Pesquisar" class="btn">        
        </form>

        <?php
            print "Resultado da pesquisa com a palavra $filtro <br>";
            print "$registros registros encontrados.";
        
            while($exibirRegistros = mysqli_fetch_array($consulta)){
                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $email = $exibirRegistros[2];
                $telefone = $exibirRegistros[3];
                $endereco = $exibirRegistros[4];
                $cpf = $exibirRegistros[5];

                print "<article>";
                print "$codigo<br>";
                print "$nome<br>";
                print "$email<br>";
                print "$telefone<br>";
                print "$endereco<br>";
                print "$cpf";
                print "</article>";
            }
        mysqli_close($conexao);
        ?>
    </script>
    </main>
    
</body>