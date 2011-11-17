<?php
	require_once("conexao.php");
	class Categoria{
	protected $id;
	protected $nome;
	protected $limiteAtividade;
	protected $limiteCategoria;
	

	
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
		function setLimiteAtividade($limite){
				$this->limiteAtividade=(double)$limite;
		}
		function setLimiteCategoria($limite){
				$this->limiteCategoria=(double)$limite;
		}
		function getId(){
				return $this->id;
		}
		function getNome(){
				return $this->nome;
		}
		function getLimiteAtividade(){
				return (double)$this->limiteAtividade;
		}
		function getLimiteCategoria(){
				return (double)$this->limiteCategoria;
		}
		
		function insere($categoria){
			$db=new Conexao();
			$categoria->nome=$db->db->real_escape_string($categoria->nome);
			$categoria->id=$db->db->real_escape_string($categoria->id);
			$categoria->limiteCategoria=$db->db->real_escape_string($categoria->limiteCategoria);
			$categoria->limiteAtividade=$db->db->real_escape_string($categoria->limiteAtividade);
			$sql="Call proc_inserirCategoria('$categoria->nome',$categoria->limiteCategoria,$categoria->limiteAtividade)";
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
		function altera($categoria){
			$db=new Conexao();
			$categoria->nome=$db->db->real_escape_string($categoria->nome);
			$categoria->id=$db->db->real_escape_string($categoria->id);
			$categoria->limiteCategoria=$db->db->real_escape_string($categoria->limiteCategoria);
			$categoria->limiteAtividade=$db->db->real_escape_string($categoria->limiteAtividade);
			$sql="Call proc_alterarCategoria('$categoria->nome',$categoria->id,$categoria->limiteCategoria,$categoria->limiteAtividade)";
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
		function listarCategorias(){
			$db=new Conexao();
			$sql="Call proc_listarCategorias;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$categoria=new Categoria();
					$categoria->setId($line['idCategoria']);
					$categoria->setNome($line['nome']);
					$categoria->setLimiteAtividade($line['limite_atividade']);
					$categoria->setLimiteCategoria($line['limite_categoria']);
					array_push($r,$categoria);
				};
				$db=null;
				return $r;
			}
			
		}
		function listarCategoria($id){
			$db=new Conexao();
			$id=$db->db->real_escape_string($id);
			$sql="Call proc_listarCategoria($id)";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$r=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					$categoria = new Categoria();
					$categoria->setNome($line['Nome']);
					$categoria->setLimiteAtividade($line['Limite_atividade']);
					$categoria->setLimiteCategoria($line['Limite_categoria']);
					$categoria->setId($line['idCategoria']);
					array_push($r,$categoria);
					
				};
				$db=null;
				return $r;
			}
			
		}
		function listaDropCategorias(){
			$db=new Conexao();
			$sql="Call proc_listaDropCategorias;";
			$result=$db->executa($sql);
			if($result->num_rows==0){
				$db=null;
				return false;

			}
			else{
				$id=array();
				$nome=array();
				while($line=$result->fetch_array(MYSQLI_ASSOC)){
					array_push($id,$line['idCategoria']);
					array_push($nome,$line['nome']);
				};
				$db=null;
				$r=array();
				array_push($r,$id);
				array_push($r,$nome);
				return $r;
			}
			
		}
	}