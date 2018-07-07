<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');
	
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$tipo_pessoa 	= filter_input(INPUT_POST, 'tipo_pessoa');
	$nome 			= filter_input(INPUT_POST, 'nome');
	$telefone 		= filter_input(INPUT_POST, 'telefone');
	$cnpj 			= filter_input(INPUT_POST, 'cnpj');
	$data_cadastro 	= filter_input(INPUT_POST, 'data_cadastro');
	$observacao 	= filter_input(INPUT_POST, 'observacao');
	$email 			= filter_input(INPUT_POST, 'email'); 

	
	$sql = "INSERT INTO clientes (tipo_pessoa, nome, telefone, cnpj, data_cadastro, observacao, email) VALUES ('$tipo_pessoa', '$nome', '$telefone', '$cnpj', '$data_cadastro', '$observacao', '$email')";
	$query = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) > 0 ){
		echo '<script>alert("Cliente cadastrado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=13";</script>';
	} else {
		echo '<script>alert("Desculpe, ocorreu um erro ao cadastrar! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=13";</script>';
	}
?>
