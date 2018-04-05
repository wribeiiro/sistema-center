<?php

	//date_default_timezone_set('America/Sao_Paulo');
	ini_set('date.timezone', 'America/Sao_Paulo');
 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'sistema-center';

	$con = mysqli_connect($host, $user, $pass, $db) or die ("erro ao conectar com banco") . print mysqli_error();

	if (!$con):
		echo 'erro ao conectar';
	endif;

	if (!isset($_SESSION)):
		session_start();
	endif;
?>