<?php

class Produto{
			private $Id_categorias;
			private $ID;
			private $Nome;
			private $Imagen;
			private $Preco;
			private $Descricao;
			
	
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"seumadrugagames")
				or die ("Erro 404");
				$this->tabela = "produtos";
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
			public function inserir(){
				$sql = "INSERT INTO 	$this->tabela(Id_categorias,Nome, Imagen, Preco, Descricao) 
				values($this->Id_categorias, '$this->Nome', '$this->Imagen', '$this->Preco', '$this->Descricao') ";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}
			public function listar ($complemento = ""){
				$sql = "SELECT $this->tabela.*,categorias.Nome as Categoria FROM 
				$this->tabela INNER JOIN categorias ON $this->tabela.Id_categorias = categorias.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Produto();
					$obj->ID = $res['ID'];
					$obj-> Nome = $res ['Nome'];
					$obj-> Imagen = $res ['Imagen'];
					$obj-> Preco = $res ['Preco'];
					$obj->Id_categorias =$res['Categoria'];
					$obj-> Descricao = $res ['Descricao'];
					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				
			}
			
					
					
			public function retornarUnico(){
		 $sql = "SELECT $this->tabela.*,categorias.Nome as Categoria FROM 
				$this->tabela INNER JOIN categorias ON $this->tabela.Id_categorias = categorias.ID
				where $this->tabela.ID=$this->ID";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Produto();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Id_categorias = $resultado['Categoria'];
			 $objeto->Nome = $resultado['Nome'];
			 $objeto->Imagen = $resultado['Imagen'];
			 $objeto->Preco = $resultado['Preco'];
			 $objeto->Descricao = $resultado['Descricao'];
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 public function editar(){
		 $sql = "UPDATE $this->tabela SET Id_categorias = $this->Id_categorias,
		 Nome = '$this->Nome',
		 Preco= '$this->Preco', Descricao = '$this->Descricao' WHERE ID = $this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }
	 public function excluir(){
		 $sql ="DELETE FROM $this->tabela WHERE ID=$this->ID";
         $retorno = mysqli_query($this->conexao, $sql);
		 return $retorno;
		 }
		 public function editarimg(){	 
		 $sql = "UPDATE $this->tabela SET 
		 Imagen = '$this->Imagen' WHERE ID= $this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
			 
		 }
}

?>