<?php

ob_start();

if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")){
	unset(
		$_SESSION['usuarioId'],			
		$_SESSION['usuarioNome'], 		
		$_SESSION['usuarioNivelAcesso'], 
		$_SESSION['usuarioLogin'], 		
		$_SESSION['usuarioSenha']
	);
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Sua sessão expirou, faça login novamente!";
	
	//Manda o usuário para a tela de login
	echo '<script>location.href="index.php";</script>';
}