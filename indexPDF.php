<?php	
	include_once("conexao.php");
	$html = "";
	
	session_start();
	$pedido = $_SESSION['pedido'];
    $sql2   = "SELECT * FROM pedido WHERE codigo='$pedido' LIMIT 1";
    $qr2    = mysqli_query($conexao,$sql2) or die (mysqli_error());
   
	if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array();
	}

	while ($row_pedidos = mysqli_fetch_assoc($qr2)){
		$html .= '----- Web Feira Resumo Pedido 🌿 ------<br>';
		$html .= '<p> N° do Pedido: '.$row_pedidos['codigo'].'<br>'; 
		$html .= 'Nome do Cliente: '.$row_pedidos['nomeCliente'].'<br>';
		$html .= 'Data do pedido: '.$row_pedidos['datapedido'].'<br>';
		$html .= 'Produtos: <br>';
		foreach($_SESSION['carrinho'] as $codigo => $qtd){
			$sql   = "SELECT * FROM produto WHERE codigo='$codigo'";
			$qr    = mysqli_query($conexao,$sql) or die (mysqli_error());
			$row_produtos    = mysqli_fetch_assoc($qr);
			$sub   = number_format($row_produtos['valor'] * $qtd , 2, ',', '.');
			
			$html .= '-'.$row_produtos['nome'].' ';
			$html .= ''.$qtd.'x';
			$html .= '  = '.$sub.' <br>';
		}
	$html .= 'Total pedido: '.$_SESSION['total'].' 🌿<br>';
	}
	echo $html;

	/*
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once 'dompdf/autoload.inc.php';

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->loadHtml('
			<h1 style="text-align: center;">Web Feira - Fatura pedido</h1>
			<p>'.$html.'</p>
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"fatura_pedido_webfeira.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);*/
?>