<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from cliente where endereco like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

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
