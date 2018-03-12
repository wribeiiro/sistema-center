<?php
	session_start();

	header('Content-type: text/html; charset=UTF-8');
	
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$tipo_pessoa 	= filter_input(INPUT_POST, 'tipo_pessoa');
	$nome 			= filter_input(INPUT_POST, 'nome');
	$telefone 		= filter_input(INPUT_POST, 'telefone');
	$cnpj 			= filter_input(INPUT_POST, 'cnpj');
	$situacao 		= filter_input(INPUT_POST, 'situacao');
	$data_cadastro 	= filter_input(INPUT_POST, 'data_cadastro');
	$observacao 	= filter_input(INPUT_POST, 'observacao');
	$contato 		= filter_input(INPUT_POST, 'contato');
	$email 			= filter_input(INPUT_POST, 'email'); 
	$senhas 		= filter_input(INPUT_POST, 'senhas');

	$tipo_servico   = filter_input(INPUT_POST, 'tipo_servico');

	$valor_total    = filter_input(INPUT_POST, 'valor_total');
	$valor_novo		= trim(str_replace(',', '',$valor_total)); 

	$sqlcnpj   = "SELECT cnpj FROM clientes WHERE cnpj = '$cnpj'";
	$cnpjquery = mysqli_query($con, $sqlcnpj);

	if (mysqli_num_rows($cnpjquery) > 0) {
		echo'<script>alert("Já existe um cliente com o mesmo CPF/CNPJ! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=12";</script>';
	} else {
		$sql = "INSERT INTO clientes (tipo_pessoa, nome, telefone, cnpj, situacao, data_cadastro, observacao, contato, email, senhas, valor_total, tipo_servico) VALUES ('$tipo_pessoa', '$nome', '$telefone', '$cnpj', '$situacao', '$data_cadastro', '$observacao', '$contato', '$email', '$senhas', '$valor_novo', '$tipo_servico')";
		$query = mysqli_query($con, $sql);

		if (mysqli_affected_rows($con) != 0 ){
			//echo 'OK';
			echo '<script>alert("Cliente cadastrado com Sucesso! :)");</script>';
			echo '<script>location.href="../administrativo.php?link=13";</script>';
		} else {
			echo '<script>alert("Desculpe, ocorreu um erro ao cadastrar! :(");</script>';
			echo '<script>location.href="../administrativo.php?link=13";</script>';
		}
	}
?>
