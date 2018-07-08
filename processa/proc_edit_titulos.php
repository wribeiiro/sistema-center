<?php
    session_start();

    header('Content-type: text/html; charset=UTF-8');

    include_once("../seguranca.php");
    include_once("../conexao.php");

    $id          = $_POST["id"];
    $cliente 	 = $_POST["cliente"];
    $documento   = $_POST["documento"];	
    $tipoc       = $_POST["tipoc"];

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
		$sql   = "UPDATE contas_pr SET 
        id_cliente = '$cliente',
        tipo_conta = '$tipoc',
        data_lanc = '$ndata_lanc',
        data_venc = '$ndata_venc',
        data_pag = default,
        num_nota = '$documento',
        valor_tit = '$valor_tit',
        valor_pago= '$valor_pago',
        valor_dif= '$valor_dif',
        pago = '$pago' WHERE id = '$id' LIMIT 1";
	else:
		$ndata_pgto  = date('Y-m-d', strtotime(str_replace('/','-', $_POST["data_pgto"])));
		$pago        = 'S';

		$sql   = "UPDATE contas_pr SET 
        id_cliente = '$cliente',
        tipo_conta = '$tipoc',
        data_lanc = '$ndata_lanc',
        data_venc = '$ndata_venc',
        data_pag = '$ndata_pgto',
        num_nota = '$documento',
        valor_tit = '$valor_tit',
        valor_pago= '$valor_pago',
        valor_dif= '$valor_dif',
        pago = '$pago' WHERE id = '$id' LIMIT 1";
	endif;
   
	$query = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) > 0 ):
		//echo $sql . 'ok';
		echo '<script>alert("Título editado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
    else:
        echo $sql;
	    echo '<script>alert("Desculpe, ocorreu um erro ao editar título! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
    endif;
?>