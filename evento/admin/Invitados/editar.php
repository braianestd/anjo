<?php
   include_once ("../../class/Carregar.class.php");
   	include_once ("../../Bootstrap/HTML/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Vendas();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   
?>



<html>
<head></head>
<body>
   <form method="POST" action="editarok.php">
       Estado da Venda:
	   <select name="Estado">
	   <option value="Concluido">Concluido</option>
	   <option value="Em Andamento">Em Andamento</option>
	   <option value="Cancelado">Cancelado</option>
	   </select>
	   <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	   <input type="submit" name="Alterar"/>
	   <input type="button" value="volver atrás" name="volver atrás2" onclick="history.back()" />
	   
   </form>
</body>
</html>
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>