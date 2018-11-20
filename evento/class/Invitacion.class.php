<?php

class Vendas{
			private $ID;
			private $cep;
			private $estado_da_venda;
			private $id_usuario;
			private $Data;
			private $Valor_total;
		    private $Tipo_de_pagamento;
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"seumadrugagames")
				or die ("Erro 404");
				$this->tabela = "vendas";
			}
			//fecha a conexao se deixar o banco aberto e elemina da memoria 
			public function __destruct(){
				unset ($this->link);
				
			} 
			// serve para acessar um valor
			public function __get($key){
				return $this->$key;
			}
			//para modificar um valor
			public function __set($key, $value){
				$this->$key = $value;
			}

			public function listar($complemento=""){
				$sql = "SELECT $this->tabela.*,usuario.Nome as usuario FROM 
				$this->tabela INNER JOIN usuario ON $this->tabela.id_usuario = usuario.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Vendas();
					$obj->ID = $res['ID'];
					$obj->cep = $res ['cep'];
					$obj->estado_da_venda = $res ['estado_da_venda'];
					$obj->usuario= $res ['usuario'];
			     	$obj->Data = $res['Data'];
					$obj->Valor_total = $res['Valor_total'];
					$obj->Tipo_de_pagamento = $res['Tipo_de_pagamento'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				}
				public function listarcopuser($complemento=""){
				$sql = "SELECT $this->tabela.*,usuario.Nome as usuario FROM 
				$this->tabela INNER JOIN usuario ON $this->tabela.id_usuario = usuario.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Vendas();
					$obj->ID = $res['ID'];
					$obj->cep = $res ['cep'];
					$obj->estado_da_venda = $res ['estado_da_venda'];
					$obj->usuario= $res ['usuario'];
			     	$obj->Data = $res['Data'];
					$obj->Valor_total = $res['Valor_total'];
					$obj->Tipo_de_pagamento = $res['Tipo_de_pagamento'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				}
					public function retornarUnico(){
		 $sql = "SELECT * FROM $this->tabela where ID=$this->ID";
		 echo $sql;
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Vendas();
			 $objeto->ID = $resultado['ID'];
			 $objeto->cep = $resultado['cep'];
			 $objeto->estado_da_venda = $resultado['estado_da_venda'];
			 $objeto->id_usuario = $resultado['id_usuario'];
			 $objeto->Data = $resultado['Data'];
			 $objeto->Valor_total = $resultado['Valor_total'];
			 $objeto->Tipo_de_pagamento = $resultado['Tipo_de_pagamento'];
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	  public function editaradmin(){
		 $sql = "UPDATE $this->tabela SET
		  estado_da_venda = '$this->estado_da_venda'
		  WHERE ID=$this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }

		public function inserir(){
				$sql = "INSERT INTO $this->tabela(cep, estado_da_venda, id_usuario, Data, Valor_total, Tipo_de_pagamento) 
				values('$this->cep', '$this->estado_da_venda', $this->id_usuario, '$this->Data', '$this->Valor_total','$this->Tipo_de_pagamento')";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
}
public function retornarVenda(){
	$sql = "select ID from $this->tabela where Data = '$this->Data' and estado_da_venda ='$this->estado_da_venda' and id_usuario=$this->id_usuario and cep='$this->cep' and Valor_total='$this->Valor_total'";
		$retorno = mysqli_query($this->conexao, $sql);
		 $resultado = mysqli_fetch_assoc($retorno);
		return $resultado["ID"];
}
}
?>