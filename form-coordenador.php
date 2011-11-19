<?php
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');;
include_once('./template/includes/coordenador.class.php');
include_once('./template/includes/validate.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
	if($_GET['action']=='cadastro'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha'])){
			$validate= new validate();
			if(!$validate->email($_POST['email'])){
					echo "<script>alert('Email inválido!')</script>";
				
				}
				else{
				$coordenador= new Coordenador();
				$coordenador->setNome($_POST['nome']);
				$coordenador->setEmail($_POST['email']);
				$coordenador->setLogin($_POST['login']);
				$coordenador->setSenha($_POST['senha']);
				
				if($coordenador->verificaDisponibilidade($coordenador->getLogin())){
					if($coordenador->insere($coordenador)){
					
						echo "<script>alert('Coordenador cadastrado com sucesso!');</script>";
						echo "<script>location.href='consulta-coordenador.php';</script>";
						
						
					
					}
					else{
						echo "<script>alert('Erro ao cadastrar!')</script>";
					
					}
				}
				else{
							echo "<script>alert('Este nome de usuário está indisponível, escolha outro!')</script>";
				
				}
			}
			
			
			}
		}
		else if($_GET['action']=='alteracao') {
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['id'])){
			
				$validate= new validate();
				if(!$validate->email($_POST['email'])){
						echo "<script>alert('Email inválido!')</script>";
						
					}
				else{
					$coordenador= new Coordenador();
					$coordenador->setNome($_POST['nome']);
					$coordenador->setEmail($_POST['email']);
				
					$coordenador->setSenha($_POST['senha']);
					$coordenador->setId($_POST['id']);
					if($coordenador->altera($coordenador)){
						echo "<script>alert('Alterado com sucesso!');location.href='consulta-coordenador.php'</script>";
						
					
					}
					else{
						echo "<script>alert('Erro!');</script>";
					}
				}
			}
		}
		


	}



if($_GET['action']=='cadastro'){
	$smarty->display('form-usuario-cadastro-coordenador.tpl');
}
else if($_GET['action']=='alteracao'){
	$coordenador= new Coordenador();
	$result=$coordenador->listarCoordenador($_GET['id']);
	if($result!=false){
		$smarty->assign('coordenador',$result);
	}
	$smarty->display('form-usuario-alteracao-coordenador.tpl');
}
	

?>
