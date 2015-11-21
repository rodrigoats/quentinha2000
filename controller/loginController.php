<?php 
	include '../model/BO/UsuarioBO.class.php';  

   	$login = $_POST['nome'];
	$senha = $_POST['senha'];

	//echo $login;
	$bo = new UsuarioBO();

	$logado = $bo->verificarLogin($login, $senha);


	if($logado === true){
		session_start();
		$_SESSION['login'] = $login;
		header("location:../index.php");
	}else{
		header("location:../login.php");
	}



 ?>