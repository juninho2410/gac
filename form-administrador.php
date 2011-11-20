<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');
include_once('./template/includes/administrador.class.php');
include_once('./template/includes/validate.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		if($_GET['action']=='cadastro'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha'])){
				$validate= new validate();
				if(!$validate->email($_POST['email'])){
					echo "<script>alert('Email inválido!')</script>";
				
				}
				else{
					$validate= new validate();
					if(!$validate->email($_POST['email'])){
							echo "<script>alert('Email inválido!')</script>";
							
						}
					else{
						$administrador= new Administrador();
						$administrador->setNome($_POST['nome']);
						$administrador->setEmail($_POST['email']);
						$administrador->setLogin($_POST['login']);
						$administrador->setSenha($_POST['senha']);
						
						
						if($administrador->verificaDisponibilidade($administrador->getLogin())){
							if($administrador->insere($administrador)){
							
								echo "<script>alert('Administrador cadastrado com sucesso!');</script>";
								echo "<script>location.href='consulta-administrador.php';</script>";
								
								
							
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
		}
		else if($_GET['action']=='alteracao') {
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['id'])){
				$validate= new validate();
				if(!$validate->email($_POST['email'])){
					echo "<script>alert('Email inválido!')</script>";
				
				}
				else{
					$administrador= new Administrador();
					$administrador->setNome($_POST['nome']);
					$administrador->setEmail($_POST['email']);
					$administrador->setSenha($_POST['senha']);
					$administrador->setId($_POST['id']);
					if($administrador->altera($administrador)){
						echo "<script>alert('Alterado com sucesso!');location.href='consulta-administrador.php'</script>";
						
					
					}
					else{
						echo "<script>alert('Erro!');</script>";
					}
				}
			}
		}


	}



if($_GET['action']=='cadastro'){
	$smarty->display('form-usuario-cadastro-administrador.tpl');
}
else if($_GET['action']=='alteracao'){
	$coordenador= new Administrador();
	$result=$coordenador->listarAdministrador($_GET['id']);
	if($result!=false){
		$smarty->assign('administrador',$result);
	}
	$smarty->display('form-usuario-alteracao-administrador.tpl');
}
	

?>
