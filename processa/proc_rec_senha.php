<?php
	
	session_start();
	require_once '../conexao.php';

	$email = $_POST['email'];
	
	$sql = "SELECT * FROM usuarios WHERE email='$email'";
	$query = mysqli_query($con, $sql);

	$num_rows = mysqli_num_rows($query);

	if($num_rows == '1') {
		while($linhas = mysqli_fetch_array($query)){
			$rowemail = $linhas['email'];
			$rowsenha = $linhas['senha'];
		}
			
		//enviar um email para variavel email juntamente com a variável senha;
		$mensage  = "Você solicitou a recuperação de senha confira seu dados." ."\n";
		$mensage .= "E-mail: " . $rowemail ."\n";
		$mensage .= "Senha: " . $rowsenha ."\n";
		$mensage .= "Atenciosamente, Tickets." ."\n";

		$emailsender = "contato@brasilnota.com.br";

		$headers = "MIME-Version: 1.1"."\n";
		$headers = "Content-type: text/html: charset=iso-8859-1"."\n";
		$headers = "From: ".$emailsender."\n";
		$headers = "Return-Path: ".$emailsender."\n";
		$headers = "Reply-To: ".$emailsender."\n";

		$send = mail($rowemail, "Tickets, recuperação de senha", $mensage, $headers, "-r". $emailsender);

		if ($send) {
			echo '<script>alert("Seus dados foram enviados para o e-mail cadastrado! :)");</script>';
			echo '<script>location.href="../index.php";</script>';
		} else {
			echo '<script>alert("Erro ao enviar! :(");</script>';
			echo '<script>location.href="../recupera_senha.php";</script>';
		}		
	}else{
		echo '<script>alert("E-mail nao encontrado por favor verifique! :(");</script>';
		echo '<script>location.href="../recupera_senha.php";</script>';
	}
?>