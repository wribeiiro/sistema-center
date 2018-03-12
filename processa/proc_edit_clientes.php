<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');

	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id 			= $_POST["id"];
	$tipo_pessoa 	= $_POST["tipo_pessoa"];
	$nome 			= $_POST["nome"];
	$telefone 		= $_POST["telefone"];
	$cnpj 			= $_POST["cnpj"];
	$situacao 		= $_POST["situacao"];
	$data_cadastro 	= $_POST["data_cadastro"];
	$observacao 	= $_POST["observacao"];
	$contato 		= $_POST["contato"];
	$email 			= $_POST["email"]; 
	$senhas 		= $_POST["senhas"];

	if (isset($_POST["check1"])):
		$tipo_servico = $_POST["check1"];
	elseif (isset($_POST["check2"])):
		$tipo_servico = $_POST["check2"];
	elseif  (isset($_POST["check3"])):
		$tipo_servico = $_POST["check3"];
	endif;

	$valor_total    = $_POST["valor_total"];
	$valor_novo		=  trim(str_replace(',', '',$valor_total)); 

	$sql = "UPDATE clientes SET tipo_pessoa = '$tipo_pessoa', nome = '$nome', telefone = '$telefone', cnpj = '$cnpj', situacao = '$situacao', data_cadastro = '$data_cadastro' , observacao = '$observacao', contato = '$contato', email = '$email', senhas ='$senhas', valor_total = '$valor_novo', tipo_servico = '$tipo_servico' WHERE id = '$id'";
	$query = mysqli_query($con, $sql) or print mysqli_error($con);

	if (mysqli_affected_rows($con) > 0 ){
		echo '<script>alert("Cliente editado com Sucesso! :) ");</script>';
		echo '<script>location.href="../administrativo.php?link=13";</script>';
	} else {
		echo '<script>alert("Desculpe, ocorreu um erro ao editar! :( ");</script>';
		echo '<script>location.href="../administrativo.php?link=17";</script>';
	}
?>
