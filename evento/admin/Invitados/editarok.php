<?php
	include_once("../../class/Carregar.class.php");
	include_once ("../../Bootstrap/HTML/topo.php");
	$objeto = new Vendas();
	$objeto->Estado = $_POST["Estado"];
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
<a class="btn btn-primary" href="http://localhost/andres/admin/Vendas/listar.php">Volver</a>
 </div>                    
</form>
</body>
</html>
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>