<?php
	session_start();

	include_once("../seguranca.php");
	include_once("../conexao.php");

	$id 			= filter_input(INPUT_POST, 'id');
	$tipo_pessoa 	= filter_input(INPUT_POST, 'tipo_pessoa');
	$nome 			= filter_input(INPUT_POST, 'nome');
	$telefone 		= filter_input(INPUT_POST, 'telefone');
	$cnpj 			= filter_input(INPUT_POST, 'cnpj');
	$data_cadastro 	= filter_input(INPUT_POST, 'data_cadastro');
	$observacao 	= filter_input(INPUT_POST, 'observacao');
	$email 			= filter_input(INPUT_POST, 'email'); 

	$sql = "UPDATE 
				clientes 
			SET 
				tipo_pessoa = '$tipo_pessoa', 
				nome = '$nome', 
				telefone = '$telefone', 
				cnpj = '$cnpj', 
				data_cadastro = '$data_cadastro', 
				observacao = '$observacao', 
				email = '$email'
			WHERE 
				id = '$id'";
	$query = mysqli_query($con, $sql) or print mysqli_error($con);

	if (mysqli_affected_rows($con) > 0 ):
		echo '<script>alert("Cliente editado com Sucesso! :) ");</script>';
		echo '<script>location.href="../administrativo.php?link=13";</script>';
	else:
		echo '<script>alert("Desculpe, ocorreu um erro ao editar! :( ");</script>';
		echo '<script>location.href="../administrativo.php?link=17";</script>';
	endif;
?>
