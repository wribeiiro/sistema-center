<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');

	include_once("../seguranca.php");
	include_once("../conexao.php");

	$cliente 	 = $_POST["cliente"];
	$documento   = $_POST["documento"];	
    $forma_pgto  = $_POST["forma_pgto"]; 

	$ndata_lanc  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_lanc"])));
    $ndata_venc  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_venc"])));
	
    $pago        = $_POST["pago"];
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
    
    $observacao  = $_POST["observacao"];

    if (is_null($_POST["data_pgto"]) | $_POST["data_pgto"] == ''):
		$sql   = "INSERT INTO titulos_rec (id_cliente, data_lanc, data_venc, data_pag, num_nota, valor_tit, valor_pago, valor_dif, observacao, forma_pgto, pago) VALUES ('$cliente', '$ndata_lanc', '$ndata_venc' , default, '$documento', '$valor_tit', '$valor_pago', '$valor_dif', '$observacao', '$forma_pgto', '$pago')";
	else:
		$ndata_pgto  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_pgto"])));

		$sql   = "INSERT INTO titulos_rec (id_cliente, data_lanc, data_venc, data_pag, num_nota, valor_tit, valor_pago, valor_dif, observacao, forma_pgto, pago) VALUES ('$cliente', '$ndata_lanc', '$ndata_venc' , '$ndata_pgto', '$documento', '$valor_tit', '$valor_pago', '$valor_dif', '$observacao', '$forma_pgto', '$pago')";
	endif;
   
	
	$query = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) != 0 ){
		//echo $sql;
		echo '<script>alert("Título lançado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	} else {
		echo '<script>alert("Desculpe, ocorreu um erro ao lançar título! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	}
?>
