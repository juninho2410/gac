<?php
	include("conexao.php");

	class Usuario{
	protected $id;
	protected $login;
	protected $senha;
	protected $perfil;

		
		function __construct()
		{
		}
		function __destruct(){
			
		}
		function setId($usuario){
				$this->id=$usuario;
		}
		function setLogin($login){
				$this->login=$login;
		}
		function setSenha($senha){
				$this->senha=$senha;
		}
		function setPerfil($perfil){
				$this->perfil=$perfil;
		}
		function getId(){
				return $this->id;
		}
		function getLogin(){
				return $this->login;
		}
		function getSenha(){
				return $this->senha;
		}
		function getPerfil(){
				return $this->perfil;
		}
		function logar($login,$senha){
			$conn=new Conexao();
			
			
				$sql="Call proc_Logar('$login','$senha')";
			
				$result=$conn->executa($sql);
					if($result->num_rows==0){
						return false;
					}
					else{
						$return=array();
						while($dados=$result->fetch_array()){
								array_push($return,$dados['id'],$dados['nome'],$dados['tipo_usuario']);
						}
						return $return;		
					}
		}
		function verificaDisponibilidade($login){
			$conn=new Conexao();
				$sql="Call proc_verificaDisponibilidade('$login')";
			
				$result=$conn->executa($sql);
				if($result){
					if($result->num_rows==0){
						return true;
					}
					else{
						return false;		
					}
				}
				else{
					return false;
				}
		}
	
	}