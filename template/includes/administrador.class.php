<?php
	require_once("usuario.class.php");
	require_once("conexao.php");
	class Administrador extends Usuario{
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
			$sql="Call proc_inserirAdministrador('$usuario->login','$usuario->senha','Coordenador','$usuario->nome','$usuario->email',@msg)";
			$result=$db->executa($sql);//Executa a inserção
			if($result){
				if($result=$db->executa("Select @msg")){
					$msg=$result->fetch_array();
					if($msg[0]=="ok"){//Verifica se a inserção foi realizada pegando o retorno da variavel passada como out;
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
			$sql="Call proc_alterarUsuario($usuario->id,'$usuario->email','$usuario->nome','$usuario->senha')";
			$result=$db->executa($sql);//Executa o update
			if($result){
				return true;
			}
			else{
				return false;
			}
		}
		function listarAdministradores(){
			$db=new Conexao();
			$sql="Call proc_listarAdministradores;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$administrador=new Administrador();
					$administrador->setId($line['idAdministrador']);
					$administrador->setNome($line['Nome']);
					$administrador->setEmail($line['Email']);
					array_push($r,$administrador);
				};
				return $r;
			}
			
		}
		function listarAdministrador($id){
			$db=new Conexao();
			$sql="Call proc_listarAdministrador($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$administrador = new Administrador();
					$administrador->setNome($line['Nome']);
					$administrador->setEmail($line['Email']);
					$administrador->setSenha($line['senha']);
					$administrador->setIdUsuario($line['idUsuario']);
					array_push($r,$administrador);
					
				};
				return $r;
			}
			
		}
	}