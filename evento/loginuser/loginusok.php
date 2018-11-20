<?php
	include_once("../class/Carregar.class.php");
	$objUsuario = new Usuarios();
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Senha = $_POST["Senha"];
	$retorno = $objUsuario->loginuser();
	if ($retorno){
		session_start();
		$_SESSION["IDuser"] = $retorno->ID;
		$_SESSION["Usuarios"] = true;
		header("Location:../nav/index.php");
	}
		
	else{
		header("Location:loginus.php?msg=erro");
		
	}	
	?>
	