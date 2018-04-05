<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');

	include_once("../seguranca.php");
	include_once("../conexao.php");

	$cliente 	 = $_POST["cliente"];
	$documento   = $_POST["documento"];	
    $forma_pgto  = $_POST["forma_pgto"];

    $data_lanc   = strtotime($_POST["data_lanc"]);
	$ndata_lanc  = date('Y-m-d', $data_lanc);

    $data_venc   = strtotime($_POST["data_venc"]);
    $ndata_venc  = date('Y-m-d', $data_venc);
	
	if ($_POST["data_pgto"] == ""):
		$ndata_pgto = "NULL";
	else:
		$data_pgto   = strtotime($_POST["data_pgto"]);
		$ndata_pgto  = date('Y-m-d', $data_pgto);
	endif;

    $pago        = $_POST["pago"];
    $valor_tit   = trim(str_replace(',', '', $_POST["valor_tit"]));
    $valor_pago  = trim(str_replace(',', '', $_POST["valor_pago"]));
    $observacao  = $_POST["observacao"];
   
	$sql   = "INSERT INTO titulos_rec (id_cliente, data_lanc, data_venc, data_pag, num_nota, valor_tit, valor_pago, observacao, forma_pgto, pago) VALUES ('$cliente', '$ndata_lanc', '$ndata_venc' , '$ndata_pgto', '$documento', '$valor_tit', '$valor_pago', '$observacao', '$forma_pgto', '$pago')";
	$query = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) != 0 ){
		echo '<script>alert("Título lançado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	} else {
		//echo '<script>alert("Desculpe, ocorreu um erro ao lançar título! :(");</script>';
		//echo '<script>location.href="../administrativo.php?link=37";</script>';
	}
?>
