<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	
	$id = $_GET["id"];

	$query 	   = "DELETE FROM titulos_rec WHERE id = '$id'";
	$resultado = mysqli_query($con, $query) or print mysqli_error();

	if (mysqli_affected_rows($con) != 0 ){
		echo '<script>alert("Título deletado com Sucesso! :)");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	} else {
		echo '<script>alert("Desculpe, ocorreu um erro ao deletar título! :(");</script>';
		echo '<script>location.href="../administrativo.php?link=37";</script>';
	}
?> 