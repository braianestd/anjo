<?php
class Usuarios{
	private $ID;
	private $Nome;
	private $Email;
	private $Senha;
	private $chave;
	private $Tipo;
	private $Imagem;
	private $conexao;
	//conecta a base de datos da tabela e a tabela que vamos accesar
	public function __construct(){
		
		$this->conexao = mysqli_connect(
		"127.0.0.1","root","" ,"evento")
		or die ("Erro ao Conectar");
		$this->tabela = "usuarios";
	}
	//deleta o conteudo da memoria e fecha a conexao
		public function __destruct(){
			unset($this->link);			
		}
	//pega o campo via get 	
		public function __get($key){
			return $this->$key;
			
		}
	//edita o campo pegado pelo get 
		public function __set($key, $value){
			$this->$key = $value;
		}
		public function inserir(){
			$sql = "INSERT INTO $this->tabela(Nome, Email, Senha)
			values('$this->Nome', '$this->Email', '$this->Senha')";
			$retorno = mysqli_query ($this->conexao, $sql);
			return $retorno;
			}
			public function listar (){
		
		$sql = "SELECT * FROM $this->tabela";	
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj = NULL;
		while  ($res = mysqli_fetch_assoc($retorno)){
		$obj = new Usuarios();
		$obj->ID = $res["ID"];
		$obj->Nome = $res["Nome"];
		$obj->Email = $res["Email"];
		$obj->Senha = $res["Senha"];
		$obj->Imagem = $res["Imagem"];		
		$arrayObj[] = $obj;
			
		}
		return $arrayObj;
	}
	public function retornarUnico(){
		 $sql = "SELECT * FROM $this->tabela where ID=$this->ID";
		 $retorno = mysqli_query($this-> conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Usuarios();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Nome = $resultado['Nome'];
			 $objeto->Email = $resultado['Email'];
			 $objeto->Senha = $resultado['Senha'];
			 $objeto->Imagem = $resultado['Imagem'];			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 	public function loginadm(){
		 $sql = "SELECT * FROM $this->tabela where Email='$this->Email'and Senha='$this->Senha' and Tipo='Administrador'";
		 $retorno = mysqli_query($this-> conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Usuarios();
			 $objeto->ID = $resultado['ID'];			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 public function loginuser(){
		$sql = "SELECT * FROM $this->tabela where Email='$this->Email' and Senha='$this->Senha' and Tipo='Usuario'";
		$retorno = mysqli_query($this->conexao, $sql);
		//separa as colunas como o banco
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){ 
			$objeto = new Usuarios();
			$objeto->ID = $resultado['ID'];	
			
			$retUsuar = $objeto;
		}
		else {
			$retUsuar = null;
		}
		return $retUsuar;
	}
	 
	 public function editar(){
		 $sql = "UPDATE $this->tabela SET Nome = '$this->Nome',
		 Email = '$this->Email',
		 Senha = '$this->Senha' WHERE ID = $this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }
	public function Excluir(){
		$sql ="DELETE FROM $this->tabela where ID=$this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}

}		

?>