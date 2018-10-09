<?php
	include_once("../../class/Carregar.class.php");
	include_once ("../../topo.php");
	$objUsuarios = new Usuarios();
	$resultado = $objUsuarios->listar();
	

?>
<html>
<head>
</head>
<body>
<h1 align="center"> Lista de Usuarios </h1>
<div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>  
                <tr class="odd gradeX">
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Senha</th>
			<th colspan="4"> Accion</th>
                </tr></thead>
				<tbody>
<?php
		foreach($resultado as $local){
				echo "<tr>
					  <td>$local->ID</td>
					  <td>$local->Nome</td>
					  <td>$local->Email</td>
					  <td>$local->Senha</td>
					  <td><a href='editar.php?id=$local->ID'>Editar</a></td>
					  <td><a href='Excluir.php?id=$local->ID'>Eliminar</a></td>
				</tr>";
		}
		?>
              </tbody>
            </table>
          </div>
        </div>
		<input type="button" value="volver atrás" name="volver atrás2" onclick="history.back()" />
</body>
</html>
<?php
include_once ("../../rodape.php");
?>	