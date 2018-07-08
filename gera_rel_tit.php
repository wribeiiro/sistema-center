<?php 
	
	require_once ("conexao.php");

	$html 		   = '';
	$dataatual 	   = date('d/m/Y');
	$situacao      = $_POST['situacao'];

	$ndata_inicio  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_inicio"])));
	$ndata_final   = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_fim"])));

	$cliente       = $_POST['cliente'];

	if($cliente == 'T'):
		$sql = "SELECT a.data_lanc, a.tipo_conta, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.num_nota, a.valor_pago, a.valor_dif, b.id, b.nome
		FROM 
		contas_pr a
		JOIN 
			clientes b ON (b.id = a.id_cliente)
		WHERE a.data_lanc >= '$ndata_inicio' AND a.data_lanc <= '$ndata_final'
		AND a.pago = '$situacao' ORDER BY a.data_lanc DESC";
	else:
		$sql = "SELECT a.data_lanc, a.tipo_conta, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.num_nota, a.valor_pago, a.valor_dif, b.id, b.nome
		FROM 
			contas_pr a
		JOIN 
			clientes b ON (b.id = a.id_cliente)
		WHERE a.data_lanc >= '$ndata_inicio' AND a.data_lanc <= '$ndata_final'
		AND a.pago = '$situacao' AND a.id_cliente = '$cliente' ORDER BY a.data_lanc DESC";
	endif;

	$result   = mysqli_query($con, $sql);
	//$contador = mysqli_num_rows($con, $sql);

	while ($rs = mysqli_fetch_assoc($result)) {
		if ($rs['tipo_conta'] == 'P') {
			$rs['tipo_conta'] = 'A pagar';
		} else {
			$rs['tipo_conta'] = 'A receber';
		}

		$html .= "<b>Cliente / Fornecedor: </b> ". $rs['nome'] . "<br>";
		$html .= "<b>Tipo Conta: </b> " . $rs['tipo_conta'] . "<br>";
		$html .= "<b>Data Lançamento: </b> " . date("d/m/Y", strtotime($rs['data_lanc'])) . "<br>";
		$html .= "<b>Valor: </b> R$ " . $rs["valor_pago"]. "<br>";
		$html .= "<hr>";
	}

	use Dompdf\Dompdf;

	require_once("bower_components/dompdf/autoload.inc.php");

	$dompdf = new DOMPDF();

	$dompdf->load_html('
		<center>
			<div>
				<h3 style="text-align: center;">Relatório de Contas</h3>
				<p style="text-align:center; padding-top: -20px;">
					Center Collor <br>Rio Negro - PR
					<span style="float: right">'.$dataatual.' </span>
				</p>
			</div>
		</center>
		<hr style="margin-top: 0px"> ' . 
		$html .'
	');

	$dompdf->render();

	//Exibir a página
	$dompdf->stream(
		"relatorio_titulos", 
		array(
			"Attachment" => false // download : true
		)
	);
?>