<?php
	session_start();
	include "banco.php";
	$nome = mysqli_real_escape_string($con, $_POST['nome']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$telefone = mysqli_real_escape_string($con, $_POST['telefone']);
	$motivo = mysqli_real_escape_string($con, $_POST['motivo']);
	$mensagem = mysqli_real_escape_string($con, $_POST['mensagem']);
	$captcha = $_POST['g-recaptcha-response']; 
	$url = "contato.php";
	if (isset($captcha)) {
			$secreto = '6Le3L4wUAAAAACyaYvObGJwmn9j2ymwui3ecSapV';
			$ip = $_SERVER['REMOTE_ADDR'];
			$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
			$resposta = json_decode($var, true);
			}
	if (empty($captcha)) {
		$_SESSION['captcha_vazio'] = "Resolva o Captcha*";
		header('location: contato.php');
	}			
	
?>	