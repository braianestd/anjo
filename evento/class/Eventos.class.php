<?php

class Compras{
			private $Id_produtos;
			private $Id_vendas;
			private $Quantidade;
		
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"seumadrugagames")
				or die ("Erro 404");
				$this->tabela = "compras";
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

			public function listarcomp ($complemento=""){
				$sql = "SELECT $this->tabela.*,produtos.Nome as produtos  FROM 
				$this->tabela INNER JOIN produtos ON $this->tabela.Id_produtos = produtos.ID  ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Compras();
					$obj->Id_produtos = $res['produtos'];
					$obj->Id_vendas = $res ['Id_vendas'];
					$obj->Quantidade = $res ['Quantidade'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				}
					public function listarcompuser ($complemento=""){
				$sql = "SELECT $this->tabela.*,produtos.Nome as produtos  FROM 
				$this->tabela INNER JOIN produtos ON $this->tabela.Id_produtos = produtos.ID  ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Compras();
					$obj->Id_produtos = $res['produtos'];
					$obj->Id_vendas = $res ['Id_vendas'];
					$obj->Quantidade = $res ['Quantidade'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				}
					public function retornarUnico(){
		 $sql = "SELECT * FROM $this->tabela where ID=$this->ID";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Compras();
			 $objeto->Id_produtos = $resultado['Id_produtos'];
			 $objeto->Id_vendas = $resultado['Id_vendas'];
			 $objeto->Quantidade = $resultado['Quantidade'];
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
		public function listarvendasprod ($complemento=""){
				$sql = "SELECT $this->tabela.*, produtos.Nome as produtos, vendas.Id_usuario as vusuario, vendas.Data, usuario.Nome as usuario FROM 
				$this->tabela INNER JOIN produtos ON $this->tabela.Id_produtos = produtos.ID inner join vendas on $this->tabela.Id_vendas = vendas.ID inner join 
				usuario on vendas.id_usuario = usuario.ID ".$complemento;

				$retorno = mysqli_query($this->conexao, $sql);
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Compras();
					$obj->Id_produto = $res['produtos'];
					$obj->Id_vendas = $res ['usuario'];
					$obj->Data = $res ['Data'];
					$obj->quantidade2 = $res ['Quantidade'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				}
						public function inserir(){
				$sql = "INSERT INTO $this->tabela(Id_produtos, Id_vendas, Quantidade) 
				values($this->Id_produtos, $this->Id_vendas, $this->Quantidade)";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
}
					
}
?>