<?php
   include_once ("../../class/Carregar.class.php");
   include_once ("../../Bootstrap/HTML/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
   }
   ?>
 <html>
<head></head>
<body>
   <form method="POST" action="Editarokf.php" enctype="multipart/form-data">
	   Nova Imagem: <input type="file" name="Imagem" />
				<input type="hidden" name="ID" value="<?php echo $ID;?>"/>
				<input type="submit" name="Alterar"/>
</form>
</body>
</html>
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>