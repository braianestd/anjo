<?php
	include_once("../../class/Carregar.class.php");
	include_once ("../../Bootstrap/HTML/topo.php");
	$objeto = new Usuarios();
	$objeto->Nome = $_POST["Nome"];
	$objeto->Email = $_POST["Email"];
	$objeto->Nascimento = $_POST["Nascimento"];
	$objeto->RG = $_POST["RG"];
	$objeto->Tipo = $_POST["Tipo"];
	$objeto->Senha = $_POST["Senha"];
	$objeto->ID = $_POST["ID"];
	$retorno = $objeto->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado";
	
?>
 <html>
<head></head>
<body>
<div align="center">
<a class="btn btn-primary" href="http://localhost/andres/admin/Usuarios/listar.php">Volver</a>
 </div>                    
</form>
</body>
</html>
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>