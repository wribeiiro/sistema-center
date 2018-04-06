<?php 
	
	require_once ("conexao.php");

	$html 		   = '';
	$dataatual 	   = date('d/m/Y');
	$situacao      = $_POST['situacao'];

	$ndata_inicio  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_inicio"])));
	$ndata_final   = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_fim"])));

	$cliente       = $_POST['cliente'];

	if($cliente == 'T'):
		$sql = "SELECT a.data_lanc, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.forma_pgto, a.observacao, a.valor_pago, a.valor_dif, b.id, b.nome
		FROM 
			titulos_rec a
		JOIN 
			clientes b ON (b.id = a.id_cliente)
		WHERE a.data_lanc >= '$ndata_inicio' AND a.data_lanc <= '$ndata_final'
		AND a.pago = '$situacao' AND a.id_cliente = '$cliente' ORDER BY a.data_lanc DESC";
	else:
		$sql = "SELECT a.data_lanc, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.forma_pgto, a.observacao, a.valor_pago, a.valor_dif, b.id, b.nome
		FROM 
			titulos_rec a
		JOIN 
			clientes b ON (b.id = a.id_cliente)
		WHERE a.data_lanc >= '$ndata_inicio' AND a.data_lanc <= '$ndata_final'
		AND a.pago = '$situacao' ORDER BY a.data_lanc DESC";
	endif;

	$result   = mysqli_query($con, $sql);
	//$contador = mysqli_num_rows($con, $sql);

	while ($rs = mysqli_fetch_assoc($result)) {

		$html .= "<b>ID: </b> " . $resultado['id_tit'] . "<br>";
		$html .= "<b>Data Lançamento: </b> " . $resultado['data_lanc'] . "<br>";
		$html .= "<b>Data Vencimento: </b> " . $resultado['data_venc'] . "<br>";
		$html .= "<b>Cliente: </b> ". $resultado['nome'] . "<br>";
		//$html .= "<b>Analista Responsável: </b> " . $resultado['login'] . "<br>";
		///$html .= "<b>Problema: </b> " . $resultado['problema'] . "<br>";
		//$html .= "<b>Solução: </b> " . $resultado['solucao'] . "<br>";
		//$html .= "<b>Status: </b> " . $resultado['status'] . "<br>";
		//$html .= "<b>Tempo: </b> " . $resultado['tempo'] . " Minutos<br><hr>";*/
	}

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;
	//use Dompdf\Options;

	// include autoloader
	require_once("bower_components/dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega o HTML
	$dompdf->load_html('
		<center>
			<div>
				<h3 style="text-align: center;">Relatório de Títulos</h3>
				<p style="text-align:center; padding-top: -20px;">
					Center Collor <br>Rio Negro - PR
				</p>
			</div>
		</center>
		<hr style="margin-top: 0px"> ' . 
		$html .'
	');

	//Renderizar o html
	$dompdf->render();

	//Exibir a página
	$dompdf->stream(
		"relatorio_titulos", 
		array(
			"Attachment" => false // download : true
		)
	);
?>