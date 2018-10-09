<?php 
	include_once ("../../class/Usuarios.class.php");
	include_once ("../../topo.php");
	$objUsuarios = new Usuarios();
	$objUsuarios->Nome= $_POST["Nome"];
	$objUsuarios->Email= $_POST["Email"];
	$objUsuarios->Senha= $_POST["Senha"];
	$retorno = $objUsuarios->inserir();
	if ($retorno)
		echo "Incluido con Exito";
	else
		echo "Vish errou";
	?>
 <html>
<head></head>
<body>
<div align="center">
<a class="btn btn-primary" href="http://localhost/anjo/admin/Usuarios/Usuarios.php">Volver</a>
 </div>                    
</form>
</body>
</html>	
	
<?php
include_once ("../../rodape.php");
?>	