<?php
	include_once("../../class/Carregar.class.php");
	include_once ("../../Bootstrap/HTML/topo.php");	
	$objVendas = new Vendas();
	$resultado = $objVendas->listar();
	

?>
<html>
<head></head>
<body>
<h1 align="center"> Lista de Vendas </h1>
<div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>  
                <tr class="odd gradeX">
			<th>ID</th>
			<th>Nome do Cliente</th>
			<th>Endereco</th>
			<th>Pagamento</th>
			<th>Estado</th>
			<th>Cantidad</th>

			<th>Valor_total</th>
			<th>data</th>
			<th colspan="4"> Accion</th>
		</tr></thead>
		<tbody>
		<?php
		foreach($resultado as $local){
				echo "<tr>
					  <td>$local->ID</td>
					  <td>$local->id_usuario</td>					  
					  <td>$local->Endereco</td>
					  <td>$local->Pagamento</td>
					  <td>$local->Estado </td>
					  <td>$local->Cantidad</td>
					  <td>$local->Valor_total</td>
					  <td>$local->data</td>
					  <td><a href='editar.php?id=$local->ID'>Editar</a></td>
					  <td> <a href='../VendasProdutos/listarcompras.php?id=$local->ID'>Ver pordutos</td> 
					  
				</tr>";
		}
		?>
		</tbody>
	</table>
	</div>
	</div>
</body>
</html>
<?php
include_once ("../../Bootstrap/HTML/rodape.php");
?>