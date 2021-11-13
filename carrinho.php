<!DOCTYPE html>
<html>
<head>
    <title> Carrinho de Compras </title>
</head>
<body>
    <h2>Carrinho</h2>
    <div class="carrinho-container">
    <style type="text/css">
        *{margin: 0;padding: 0;box-sizing: border-box;}
        h2.title{
            background-color: #069;
            width:100%
            padding:20px;
            text-align: center;
            color:white;
        }
        
        .carrinho-container{
            display: flex;
        }

        .produto{
            width:33.3%;
            padding: 0 30px;
        }

        .produto img{
            max-width: 100%;
        }

        .produto a{
            display: block;
            width:100%;
            padding:10px;
            color:white;
            background-color:#5fb382;
            text-align:center;
            text-decoration: none;
        }

    </style> 
<?php

    $items = array(['nome'=>'Abacate','imagem'=>'/ppo-webfeira/img/produtos/000008.jpg','preco'=>'200'],
    ['nome'=>'Banana','imagem'=>'/ppo-webfeira/img/produtos/000008.jpg','preco'=>'200'],
    ['nome'=>'Maçã','imagem'=>'/ppo-webfeira/img/produtos/000008.jpg','preco'=>'200']);

    foreach($items as $key => $value){
?>
    <div class="produto">
        <img src="<?php echo $value['imagem'] ?>"/>
        <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho!</a>
    </div><!--produto-->


<?php
    }
?>
    </div><!--carrinho-container-->

<?php
    if(isset($_GET['adicionar'])){
        //adicionar ao carrinho
        $idProduto = (int) $_GET['adicionar'];
        if(isset($items[$idProduto])){
            if(isset($_SESSION[$idProduto])){
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
            }else{
                $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto][
                    'nome'],'preco'=>$items[$idProduto][
                    'preco']);
            }
            echo '<script>alert("item adicionado");</script>';
        }else{
           die('produto nao existe');
        }
    }

?>

    <h2 class="title">Carrinho:</h2>
<?php
    foreach($_SESSION['carrinho'] as $key => $value){
        //nome
        //quantidade
        //preco
        echo '<p>Nome: '.$value['nome'].'| Quantidade: '.$value['quantidade'].'| Preço: '.(
            $value['quantidade']*$value['preco']).'</p>';
    }
?>

</body>
</html>