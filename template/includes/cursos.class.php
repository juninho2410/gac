<?php
	require_once("conexao.php");
	class Curso{
	protected $id;
	protected $nome;
	protected $idCoordenador;
	protected $nomeCoordenador;
	

	
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
		function setIdCoordenador($coordenador){
				$this->idCoordenador=$coordenador;
		}
		function setNomeCoordenador($coordenador){
				$this->nomeCoordenador=$coordenador;
		}
		function getId(){
				return $this->id;
		}
		function getNome(){
				return $this->nome;
		}
		function getIdCoordenador(){
				return $this->idCoordenador;
		}
		function getNomeCoordenador(){
				return $this->nomeCoordenador;
		}
		
		function insere($curso){
			$db=new Conexao();
			$sql="Call proc_inserirCurso('$curso->nome',$curso->idCoordenador)";
			$result=$db->executa($sql);//Executa a inserção
			if($result){
				$db=null;
				return true;
			}
			else{
				$db=null;
				return false;
			}
		
				
		}
		function altera($curso){
			$db=new Conexao();
			$sql="Call proc_alterarCurso('$curso->nome',$curso->id,$curso->idCoordenador)";
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
		function listarCursos(){
			$db=new Conexao();
			$sql="Call proc_listarCursos;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$curso=new Curso();
					$curso->setId($line['idCurso']);
					$curso->setNome($line['Nome']);
					$curso->setIdCoordenador($line['idCoordenador']);
					$curso->setNomeCoordenador($line['nome_coordenador']);
					array_push($r,$curso);
				};
				$db=null;
				return $r;
			}
			
		}
		function listarCurso($id){
			$db=new Conexao();
			$sql="Call proc_listarCurso($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$curso = new Curso();
					$curso->setNome($line['Nome']);
					$curso->setIdCoordenador($line['idCoordenador']);
					$curso->setId($line['idCurso']);
					$curso->setNomeCoordenador($line['nome_coordenador']);
					array_push($r,$curso);
					
				};
				$db=null;
				return $r;
			}
			
		}
		function listaDropCursos(){
			$db=new Conexao();
			$sql="Call proc_listaDropCursos;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$id=array();
				$nome=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					array_push($id,$line['idCurso']);
					array_push($nome,$line['Nome']);
				};
				$db=null;
				$r=array();
				array_push($r,$id);
				array_push($r,$nome);
			
				return $r;
			}
			
		}
	}