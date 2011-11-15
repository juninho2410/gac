<?php

require('../libs/Smarty.class.php');
include_once('./includes/sessao.php');
require('./includes/usuario.class.php');
include_once('./includes/bd.php');
include_once('./includes/smarty.php');




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
						$smarty->assign("id",$_SESSION['id']);
					$smarty->assign("nome",$_SESSION['nome']);
					$smarty->assign("perfil",$_SESSION['perfil']);	
					
		}
	}
}


$smarty->display('index.tpl');
?>
