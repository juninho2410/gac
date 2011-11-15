<?php
	class Conexao{
	protected $host='localhost';
	protected $usuario='root';
	protected $senha='';
	protected $banco='gac';
	public $db;
	
		function __construct()
		{
			$this->db = new mysqli($this->host,$this->usuario,$this->senha,$this->banco);
			if (mysqli_connect_errno())
				echo "Não foi possível conectar-se ao banco de dados: " . mysqli_connect_error();
			else
				return TRUE;
		}
		function __destruct(){
			$this->db->close();
		}
		
		function executa($sql){
			$resultado = $this->db->query($sql);
			if ($resultado)
				return $resultado;
			else
				echo "erro".$this->db->error;
		}
	}