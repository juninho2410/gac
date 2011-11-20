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
			$usuario->login=$db->db->real_escape_string($usuario->login);
			$usuario->senha=$db->db->real_escape_string($usuario->senha);
			$usuario->nome=$db->db->real_escape_string($usuario->nome);
			$usuario->email=$db->db->real_escape_string($usuario->email);
			$usuario->curso=$db->db->real_escape_string($usuario->curso);
			$sql="Call proc_inserirAluno('$usuario->login','$usuario->senha','Aluno','$usuario->nome','$usuario->email',$usuario->curso,@msg)";
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
			$usuario->id=$db->db->real_escape_string($usuario->id);
			$usuario->senha=$db->db->real_escape_string($usuario->senha);
			$usuario->nome=$db->db->real_escape_string($usuario->nome);
			$usuario->email=$db->db->real_escape_string($usuario->email);
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
		function relatorioPorTipo($ra){
			$db=new Conexao();
			$sql="Call proc_relatorioPorTipo($ra)";
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
		function listarAluno($ra){
			$db=new Conexao();
			$ra=$db->db->real_escape_string($ra);
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
		function quantidadeHorasCategoria($ra,$idCategoria){
			$db=new Conexao();
			$id=$db->db->real_escape_string($id);
			$sql="Call proc_relatorioPorTipodeAC($ra,$idCategoria)";
			
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r="";
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$r=$line['total'];
				
					
				};
				$db=null;
				return $r;
				
			}
			
		}
	}