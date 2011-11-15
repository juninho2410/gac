<?php

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');
require('./template/includes/usuario.class.php');


if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['login']) && isset($_POST['senha'])){
		$login=htmlentities($_POST['login']);
		$senha=htmlentities($_POST['senha']);
		$usuario= new usuario();
		$logar=$usuario->logar($login,$senha);
		if(!$logar){
			$smarty->assign("erro","Login ou senha incorretos");
		
		}
		else{
			$_SESSION['id']=$logar[0];
			$_SESSION['nome']=$logar[1];
			$_SESSION['perfil']=$logar[2];
			if($_SESSION['perfil']=="Administrador"){
				header("Location:administrador.php");
			}
			else if($_SESSION['perfil']=="Aluno"){
				header("Location:aluno.php");
			}
			else if($_SESSION['perfil']=="Coordenador"){
				header("Location:coordenador.php");
			}		
		}
	}
}


$smarty->display('index.tpl');
?>
