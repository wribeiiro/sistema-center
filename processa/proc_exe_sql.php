<?php 

	session_start();
	
	include_once("../seguranca.php");
	include_once("../conexao.php");

  	$query   = $_POST['query'];

	$sql2    = $query;
	$execute = mysqli_query($con, $sql2) or print mysqli_error($con);

	if(mysqli_affected_rows($con) > 0) {
	    $linhas_afetadas = mysqli_affected_rows($con);
	    echo '<script>alert("Registros afetados: '.$linhas_afetadas.'") </script>';
	    echo '<script>location.href="../administrativo.php?link=36";</script>';
	} else {
	    echo '<script>alert("Erro ao executar consulta") </script>';
	    echo '<script>location.href="../administrativo.php?link=36";</script>';
	}