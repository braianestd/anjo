<?php
include_once("../../class/Carregar.class.php");
include_once ("../../topo.php");
	if(!$_GET['id']){
		header("location:listar.php");
	}
else{
	
	$id=$_GET["id"];
	$objeto = new Usuarios();
	$objeto->ID=$id;
	$retorno = $objeto->Excluir();
		if($retorno)
			echo "Excluido com Sucesso";
		else 
			echo "Nao foi Exluido";
}
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
include_once ("../../rodape.php");
?>	