<?php
   include_once ("../../class/Carregar.class.php");
   include_once ("../../nav/topo.php");	
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Usuarios();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   
?>



<html>
<head></head>
<body>
<div class="widget-box" >
        <div class="widget-content nopadding" >
          <form action="editarok.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nome:</label>
			  <div class="controls">
			  <input type="text"  name="Nome" class="span8" value="<?php echo $variavel->Nome;?>"/>
            </div>
			</div>
            <div class="control-group">
              <label class="control-label">Email:</label>
			  <div class="controls">
			  <input type="text" name="Email" class="span8" value="<?php echo $variavel->Email;?>"/>
            </div>
			</div>
            <div class="control-group">
              <label class="control-label">Nascimento:</label>
			  <div class="controls">
			  <input type="date" name="Nascimento" class="span8" value="<?php echo $variavel->Nascimento;?>"/>
            </div>
            </div>
			<div class="control-group">
              <label class="control-label">RG:</label>
			  <div class="controls">
			  <input type="number" name="RG" class="span8" value="<?php echo $variavel->RG;?>"/>
            </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tipo:</label>
			  <div class="controls">
			  <input type="text" name="Tipo" class="span8" value="<?php echo $variavel->Tipo;?>"/>
            </div>
            </div>
            <div class="control-group">
              <label class="control-label">Senha:</label>
			  <div class="controls">
			  <input type="password" name="Senha" class="span8" value="<?php echo $variavel->Senha;?>"/>
            </div>
            </div>
            <div class="form-actions">
			  <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
              <input type="submit" name="Alterar" class="btn btn-success"/>
            </div>
          </form>
        </div>   
	
</body>
</html>
</html>
<?php
include_once ("../../nav/rodape.php");
?>
