<?php
	require_once("usuario.class.php");
	require_once("conexao.php");
	class Atividade{
	protected $id;
	protected $idCategoria;
	protected $nomeCategoria;
	protected $idAlunoRa;
	protected $nomeAluno;
	protected $titulo;
	protected $dataRealizacao;
	protected $ch;
	protected $nomeArquivo;
	protected $status;
	protected $descricao;
	protected $comentario;

	
		function __construct()
		{
		}
		function __destruct(){
			
		}
		function setId($id){
				$this->id=$id;
		}
		function setIdCategoria($idCategoria){
				$this->idCategoria=$idCategoria;
		}
		function setNomeCategoria($nomeCategoria){
				$this->nomeCategoria=$nomeCategoria;
		}
		function setIdAlunoRa($idAlunoRa){
				$this->idAlunoRa=$idAlunoRa;
		}
		function setNomeAluno($nomeAluno){
				$this->nomeAluno=$nomeAluno;
		}
		function setTitulo($titulo){
				$this->titulo=$titulo;
		}
		function setDataRealizacao($dataRealizacao){
				$this->dataRealizacao=$dataRealizacao;
		}
		function setCh($ch){
				$this->ch=$ch;
		}
		function setNomeArquivo($nomeArquivo){
				$this->nomeArquivo=$nomeArquivo;
		}
		function setStatus($status){
				$this->status=$status;
		}
		function setDescricao($descricao){
				$this->descricao=$descricao;
		}
		function setComentario($comentario){
				$this->comentario=$comentario;
		}
		function getId(){
				return $this->id;
		}
		function getIdCategoria(){
				return $this->idCategoria;
		}
		function getIdAlunoRa(){
				return $this->idAlunoRa;
		}
		function getTitulo(){
				return $this->titulo;
		}
		function getDataRealizacao(){
				return $this->dataRealizacao;
		}
		function getCh(){
				return $this->ch;
		}
		function getNomeArquivo(){
				return $this->nomeArquivo;
		}
		function getNomeAluno(){
				return $this->nomeAluno;
		}
		function getNomeCategoria(){
				return $this->nomeCategoria;
		}
		function getStatus(){
				return $this->status;
		}
		function getDescricao(){
				return $this->descricao;
		}
		function getComentario(){
				return $this->comentario;
		}
		
		
		function insere($ac){
			$db=new Conexao();
			$sql="Call proc_inserirAC($ac->idAlunoRa,'$ac->titulo',$ac->idCategoria,'$ac->descricao','$ac->dataRealizacao',$ac->ch,'$ac->nomeArquivo')";
			$result=$db->executa($sql);//Executa a inserção
			if($result->num_rows!=0){
				$nome="";
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$nome=$line['nome_arquivo'];
				}
				return $nome;
			}
			else{
				return false;
			}
		}
		function altera($ac){
			$db=new Conexao();
			
			$sql="Call proc_alterarAc($ac->id,$ac->ch,'$ac->status','$ac->comentario')";
			$result=$db->executa($sql);//Executa o update
			if($result){
				return true;
			}
			else{
				return false;
			}
		}
		function listarAcsAluno($ra){
			$db=new Conexao();
			$db->db->real_escape_string($ra);
			$sql="Call proc_listarAcsAluno($ra)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$ac=new Atividade();
					$ac->setId($line['idAtividade']);
					$ac->setTitulo($line['titulo']);
					$ac->setStatus($line['status_ac']);
					array_push($r,$ac);
				};
				return $r;
			}
			
		}
		function listarAcsCoordenador($id){
			$db=new Conexao();
			$db->db->real_escape_string($id);
			$sql="Call proc_listarAcsCoordenador($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$ac=new Atividade();
					$ac->setId($line['idAtividade']);
					$ac->setTitulo($line['titulo']);
					$ac->setStatus($line['status_ac']);
					array_push($r,$ac);
				};
				return $r;
			}
			
		}
		function listarAcsCoordenadorDetalhes($id){
			$db=new Conexao();
			$db->db->real_escape_string($id);
			$sql="Call proc_listarAcDetalhes($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$ac=new Atividade();
					$ac->setCh($line['CH']);
					$ac->setId($line['idAtividade']);
					$ac->setTitulo($line['titulo']);
					$ac->setStatus($line['status_ac']);
					$ac->setDescricao($line['descricao']);
					$ac->setDataRealizacao($line['dataRealizacao']);
					$ac->setComentario($line['comentario']);
					$ac->setNomeArquivo($line['nome_arquivo']);
					$ac->setNomeAluno($line['nome_aluno']);
					$ac->setNomeCategoria($line['nome_categoria']);
					array_push($r,$ac);
				};
				return $r;
			}
			
		}
		function listarAcsAlunoDetalhes($id){
			$db=new Conexao();
			$db->db->real_escape_string($id);
			$sql="Call proc_listarAcDetalhes($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$ac=new Atividade();
					$ac->setCh($line['CH']);
					$ac->setId($line['idAtividade']);
					$ac->setTitulo($line['titulo']);
					$ac->setStatus($line['status_ac']);
					$ac->setDescricao($line['descricao']);
					$ac->setDataRealizacao($line['dataRealizacao']);
					$ac->setComentario($line['comentario']);
					$ac->setNomeArquivo($line['nome_arquivo']);
					$ac->setNomeAluno($line['nome_aluno']);
					$ac->setNomeCategoria($line['nome_categoria']);
					array_push($r,$ac);
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