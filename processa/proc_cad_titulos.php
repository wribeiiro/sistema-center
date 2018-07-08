<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');

	include_once("../seguranca.php");
	include_once("../conexao.php");

	$cliente 	 = $_POST["cliente"];
	$tipoc       = $_POST["tipoc"];
	$documento   = $_POST["documento"];	

	$ndata_lanc  = date('Y-m-d');
    $ndata_venc  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_venc"])));
	
    $valor_tit   = trim(str_replace(',', '', $_POST["valor_tit"]));
    $valor_pago  = trim(str_replace(',', '', $_POST["valor_pago"]));

    if(is_null($_POST["valor_pago"]) || $_POST["valor_pago"] == ''):
		$valor_pago = 0;
	else:
		$valor_pago = trim(str_replace(',', '', $_POST["valor_pago"]));	
	endif;

	if(is_null($_POST["valor_dif"]) || $_POST["valor_dif"] == ''):
		$valor_dif = 0;
	else:
		$valor_dif = trim(str_replace(',', '', $_POST["valor_dif"]));	
	endif;
    
	if (is_null($_POST["data_pgto"]) || $_POST["data_pgto"] == ''):
		$pago  = 'N';
		$sql   = "INSERT INTO contas_pr (id_cliente, tipo_conta, data_lanc, data_venc, data_pag, num_nota, valor_tit, valor_pago, valor_dif, pago) VALUES ('$cliente', '$tipoc',  '$ndata_lanc', '$ndata_venc' , default, '$documento', '$valor_tit', '$valor_pago', '$valor_dif', '$pago')";
	else:
		$ndata_pgto  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_pgto"])));
		$pago  = 'S';

		$sql   = "INSERT INTO contas_pr (id_cliente, tipo_conta, data_lanc, data_venc, data_pag, num_nota, valor_tit, valor_pago, valor_dif, pago) VALUES ('$cliente', '$tipoc', '$ndata_lanc', '$ndata_venc' , '$ndata_pgto', '$documento', '$valor_tit', '$valor_pago', '$valor_dif', '$pago')";
	endif;
   
	
	$query = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) != 0 ){
		//echo $sql;
		echo '<script>alert("Título lançado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	} else {
		echo $sql;
		echo '<script>alert("Desculpe, ocorreu um erro ao lançar título! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	}
?>
