<?php
	require_once("usuario.class.php");
	ob_start();
	if(require_once("conexao.php")){
		ob_end_clean();
	}else{
		require_once("conexao.php");
	}
	
	
	class Coordenador extends Usuario{
	protected $id;
	protected $nome;
	protected $email;
	protected $idUsuario;

	
		function __construct()
		{
		}
		function __destruct(){
			
		}
		function setId($id){
				$this->id=$id;
		}
		function setNome($nome){
				$this->nome=$nome;
		}
		function setEmail($email){
				$this->email=$email;
		}
		function setIdUsuario($usuario){
				$this->idUsuario=$usuario;
		}
		function getId(){
				return $this->id;
		}
		function getNome(){
				return $this->nome;
		}
		function getEmail(){
				return $this->email;
		}
		function getIdUsuario(){
				return $this->idUsuario;
		}
		
		function insere($usuario){
			$db=new Conexao();
			$usuario->login=$db->db->real_escape_string($usuario->login);
			$usuario->senha=$db->db->real_escape_string($usuario->senha);
			$usuario->nome=$db->db->real_escape_string($usuario->nome);
			$usuario->email=$db->db->real_escape_string($usuario->email);
			$sql="Call proc_inserirCoordenador('$usuario->login','$usuario->senha','Coordenador','$usuario->nome','$usuario->email',@msg)";
			$result=$db->executa($sql);//Executa a inserção
			if($result){
				if($result=$db->executa("Select @msg")){
					$msg=$result->fetch_array();
					if($msg[0]=="ok"){//Verifica se a inserção foi realizada pegando o retorno da variavel passada como out;
						$db=null;
						return true;
					}
					else{
						return false;
					}
				}
			}
			else{
				return false;
			}
		}
		function altera($usuario){
			$db=new Conexao();
			$usuario->id=$db->db->real_escape_string($usuario->id);
			$usuario->senha=$db->db->real_escape_string($usuario->senha);
			$usuario->nome=$db->db->real_escape_string($usuario->nome);
			$usuario->email=$db->db->real_escape_string($usuario->email);

			$sql="Call proc_alterarUsuario($usuario->id,'$usuario->email','$usuario->nome','$usuario->senha')";
			$result=$db->executa($sql);//Executa o update
			if($result){
				$db=null;
				return true;
			}
			else{
				$db=null;
				return false;
			}
		}
		function listarCoordenadores(){
			$db=new Conexao();
			$sql="Call proc_listarCoordenadores;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$coordenador=new Coordenador();
					$coordenador->setId($line['idCoordenador']);
					$coordenador->setNome($line['Nome']);
					$coordenador->setEmail($line['Email']);
					array_push($r,$coordenador);
				};
				$db=null;
				return $r;
			}
			
		}
		function relatorioAtividadesSolicitadas($id){
			$db=new Conexao();
			$sql="Call proc_relatorioAtividadeSolicitada($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					
					array_push($r,$line);
				};
				return $r;
			}
			
		}
		function listaDropCoordenadores(){
			$db=new Conexao();
			$sql="Call proc_listaDropCoordenadores;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$id=array();
				$nome=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					array_push($id,$line['idCoordenador']);
					array_push($nome,$line['Nome']);
				};
				$db=null;
				$r=array();
				array_push($r,$id);
				array_push($r,$nome);
			
				return $r;
			}
			
		}
		function listarCoordenador($id){
			$db=new Conexao();
			$id=$db->db->real_escape_string($id);
			$sql="Call proc_listarCoordenador($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$coordenador = new Coordenador();
					$coordenador->setNome($line['Nome']);
					$coordenador->setEmail($line['Email']);
					$coordenador->setSenha($line['Senha']);
					$coordenador->setIdUsuario($line['idUsuario']);
					array_push($r,$coordenador);
					
				};
				$db=null;
				return $r;
			}
			
		}
	}