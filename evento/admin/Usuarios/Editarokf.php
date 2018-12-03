<?php
	include_once("../../class/Carregar.class.php");
	include_once ("../../Bootstrap/HTML/topo.php");
	$objeto = new Produtos();
	$objeto->ID = $_POST["ID"];
	
		if ($_FILES["Imagem"]){
		
		$diretorio ="../../img/";
		$Nome = $_FILES["Imagem"]["name"];
		$nomeTemporario = $_FILES["Imagem"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$Nome);
	}
	$objeto->Imagem= $Nome;	
	
	$retorno = $objeto->editarImagem();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado";
	?>
 <html>
<head></head>
<body>
<div align="center">
<a class="btn btn-primary" href="http://localhost/andres/admin/Produtos/listar.php">Volver</a>
 </div>                    
</form>
</body>
</html>	
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>
	