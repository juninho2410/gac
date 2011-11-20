<?php
	session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['perfil'])) {
		if($_SESSION['perfil']!=$permissao){
			if($_SESSION['perfil']=="Aluno")
				header('Location:aluno.php');
			else if($_SESSION['perfil']=="Administrador")
				header('Location:administrador.php');
			else if($_SESSION['perfil']=="Coordenador")
				header('Location:coordenador.php');
			else
				header('Location:index.php');
			
			}
	}
		
		
	
	else{
		session_destroy();
		header('Location:index.php');
	
	}


?>