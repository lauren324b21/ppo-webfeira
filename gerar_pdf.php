<?php include_once("conexao.php");
    include ("pdf/mpdf.php"); 
    $html = "";
    
    session_start();
	$pedido = $_SESSION['pedido'];
    $sql2   = "SELECT * FROM pedido WHERE codigo='$pedido' LIMIT 1";
    $qr2    = mysqli_query($conexao,$sql2) or die (mysqli_error());
   
	if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array();
	}

	while ($row_pedidos = mysqli_fetch_assoc($qr2)){
		$html .= '<h4> Resumo Pedido Web Feira 🌿 </h4>';
		$html .= 'N° do Pedido: '.$row_pedidos['codigo'].'<br>'; 
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
	$html .= 'Total pedido: '.$_SESSION['total'].'<br>';
}
	echo $html;
    
    $arquivo = "fatura.pdf";
    $mpdf = new mPDF();
    $mpdf -> WriteHTML($html);
    $mpdf -> Output ($arquivo, 'I');
?>