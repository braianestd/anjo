<?php
	include_once("../../class/Carregar.class.php");
	$objUsuario = new Usuario();
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Senha = $_POST["Senha"];
	$retorno = $objUsuario->loginuser();
	if ($retorno){
		session_start();
		$_SESSION["IDuser"] = $retorno->ID;
		$_SESSION["Usuario"] = true;
		header("Location:../index/index.php");
	}
		
	else{
		header("Location:loginus.php?msg=erro");
		
	}	
	?>
	