<?php
	require_once("usuario.class.php");
	require_once("conexao.php");
	class Aluno extends Usuario{
	protected $id;
	protected $nome;
	protected $email;
	protected $curso;
	protected $idUsuario;

	
		function __construct()
		{
		}
		function __destruct(){
			
		}
		function setRa($id){
				$this->id=$id;
		}
		function setNome($nome){
				$this->nome=$nome;
		}
		function setEmail($email){
				$this->email=$email;
		}
		function setCurso($curso){
				$this->curso=$curso;
		}
		function setIdUsuario($usuario){
				$this->usuario=$usuario;
		}
		function getRa(){
				return $this->id;
		}
		function getNome(){
				return $this->nome;
		}
		function getEmail(){
				return $this->email;
		}
		function getCurso(){
				return $this->curso;
		}
		function getIdUsuario(){
				return $this->usuario;
		}
		
		function insere($usuario){
			$db=new Conexao();
			$sql="Call proc_inserirAluno('$usuario->login','$usuario->senha','Aluno','$usuario->nome','$usuario->email',$usuario->curso,@msg)";
			$result=$db->executa($sql);//Executa a inser��o
			if($result){
				if($result=$db->executa("Select @msg")){
					$msg=$result->fetch_array();
					if($msg[0]=="ok"){//Verifica se a inser��o foi realizada pegando o retorno da variavel passada como out;
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
		function listarAlunos(){
			$db=new Conexao();
			$sql="Call proc_listarAlunos";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$al=new Aluno();
					$al->setRa($line['RA']);
					$al->setNome($line['Nome']);
					$al->setEmail($line['Email']);
					$al->setCurso($line['Curso']);
					array_push($r,$al);
				};
				return $r;
			}
			
		}
		function listarAluno($ra){
			$db=new Conexao();
			$sql="Call proc_listarAluno($ra)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$al = new Aluno();
					$al->setNome($line['Nome']);
					$al->setEmail($line['Email']);
					$al->setSenha($line['Senha']);
					$al->setIdUsuario($line['idUsuario']);
					array_push($r,$al);
					
				};
				return $r;
			}
			
		}
	}