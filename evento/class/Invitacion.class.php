<?php

class Vendas{
			private $ID;
			private $Nome;
			private $Email;
			private $cod_event;
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"seumadrugagames")
				or die ("Erro 404");
				$this->tabela = "invitacion";
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
				$sql = "SELECT $this->tabela.*,usuarios.Nome as usuarios FROM 
				$this->tabela INNER JOIN usuarios ON $this->tabela.id_usuario = usuario.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Invitacion();
					$obj->ID = $res['ID'];
					$obj->Nome = $res ['Nome'];
					$obj->Email = $res ['Email'];
					$obj->cod_event= $res ['cod_event'];
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
					$obj = new Usuarios();
					$obj->ID = $res['ID'];
					$obj->Nome = $res ['Nome'];
					$obj->Email = $res ['Email'];
					$obj->cod_event= $res ['cod_event'];
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
			 $objeto = new Usuarios();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Nome = $resultado['Nome'];
			 $objeto->Email = $resultado['Email'];
			 $objeto->cod_event = $resultado['cod_event'];
		
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
				$sql = "INSERT INTO $this->tabela(Nome, Email, cod_event) 
				values('$this->Nome', '$this->Email', $this->cod_event)";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
}
public function retornarVenda(){
	$sql = "select ID from $this->tabela where Nome = '$this->Nome' and Email ='$this->Email' and cod_event=$this->cod_event";
		$retorno = mysqli_query($this->conexao, $sql);
		 $resultado = mysqli_fetch_assoc($retorno);
		return $resultado["ID"];
}
}
?>