<?php
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');
include_once('./template/includes/aluno.class.php');
include_once('./template/includes/coordenador.class.php');
include_once('./template/includes/administrador.class.php');



	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro' && $_GET['from']=='aluno'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['curso'])){
				$aluno= new Aluno();
				$aluno->setNome($_POST['nome']);
				$aluno->setEmail($_POST['email']);
				$aluno->setLogin($_POST['login']);
				$aluno->setSenha($_POST['senha']);
				$aluno->setCurso($_POST['curso']);
				
				if($aluno->verificaDisponibilidade($aluno->getLogin())){
					if($aluno->insere($aluno)){
						echo "<script>alert('Aluno cadastrado com sucesso!');location.href='consulta-usuario.php?from=aluno';</script>";
					
					
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
		else if($_GET['action']=='alteracao' && $_GET['from']=='aluno') {
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['id'])){
				$aluno= new Aluno();
				$aluno->setNome($_POST['nome']);
				$aluno->setEmail($_POST['email']);
				$aluno->setSenha($_POST['senha']);
				$aluno->setRa($_POST['id']);
				if($aluno->altera($aluno)){
					echo "<script>alert('Alterado com sucesso!');location.href='consulta-usuario.php?from=aluno'</script>";
					
				
				}
				else{
					echo "<script>alert('Erro!');</script>";
				}
		
			}
		}
		else if($_GET['action']=='cadastro' && $_GET['from']=='coordenador'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha'])){
				$coordenador= new Coordenador();
				$coordenador->setNome($_POST['nome']);
				$coordenador->setEmail($_POST['email']);
				$coordenador->setLogin($_POST['login']);
				$coordenador->setSenha($_POST['senha']);
				
				if($coordenador->verificaDisponibilidade($coordenador->getLogin())){
					if($coordenador->insere($coordenador)){
					
						echo "<script>alert('Coordenador cadastrado com sucesso!');</script>";
						echo "<script>location.href='consulta-usuario.php?from=coordenador';</script>";
						
						
					
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
		else if($_GET['action']=='alteracao' && $_GET['from']=='coordenador') {
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['id'])){
				$coordenador= new Coordenador();
				$coordenador->setNome($_POST['nome']);
				$coordenador->setEmail($_POST['email']);
				$coordenador->setSenha($_POST['senha']);
				$coordenador->setId($_POST['id']);
				if($coordenador->altera($coordenador)){
					echo "<script>alert('Alterado com sucesso!');location.href='consulta-usuario.php?from=coordenador'</script>";
					
				
				}
				else{
					echo "<script>alert('Erro!');</script>";
				}
		
			}
		}
		else if($_GET['action']=='cadastro' && $_GET['from']=='administrador'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha'])){
				$administrador= new Administrador();
				$administrador->setNome($_POST['nome']);
				$administrador->setEmail($_POST['email']);
				$administrador->setLogin($_POST['login']);
				$administrador->setSenha($_POST['senha']);
				
				if($administrador->verificaDisponibilidade($administrador->getLogin())){
					if($administrador->insere($administrador)){
					
						echo "<script>alert('Administrador cadastrado com sucesso!');</script>";
						echo "<script>location.href='consulta-usuario.php?from=administrador';</script>";
						
						
					
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
		else if($_GET['action']=='alteracao' && $_GET['from']=='administrador') {
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['id'])){
				$administrador= new Administrador();
				$administrador->setNome($_POST['nome']);
				$administrador->setEmail($_POST['email']);
				$administrador->setSenha($_POST['senha']);
				$administrador->setId($_POST['id']);
				if($administrador->altera($administrador)){
					echo "<script>alert('Alterado com sucesso!');location.href='consulta-usuario.php?from=administrador'</script>";
					
				
				}
				else{
					echo "<script>alert('Erro!');</script>";
				}
		
			}
		}


	}


if($_GET['from']=='aluno' && $_GET['action']=='cadastro'){ 
include_once('./template/includes/cursos.class.php');
$curso = new Curso();
	$result=$curso->listaDropCursos();
	
	
	if($result!=false){
		$id=$result[1];
		$nome=$result[0];
		$smarty->assign('nome',$id);
		$smarty->assign('id',$nome);
	
	}
	$smarty->display('form-usuario-cadastro-aluno.tpl');
}
else if($_GET['from']=='aluno' && $_GET['action']=='alteracao'){
	$aluno= new Aluno();
	$result=$aluno->listarAluno($_GET['id']);
	if($result!=false){
		$smarty->assign('aluno',$result);
	}
	$smarty->display('form-usuario-alteracao-aluno.tpl');
}
else if($_GET['from']=='coordenador' && $_GET['action']=='cadastro'){
	$smarty->display('form-usuario-cadastro-coordenador.tpl');
}
else if($_GET['from']=='coordenador' && $_GET['action']=='alteracao'){
	$coordenador= new Coordenador();
	$result=$coordenador->listarCoordenador($_GET['id']);
	if($result!=false){
		$smarty->assign('coordenador',$result);
	}
	$smarty->display('form-usuario-alteracao-coordenador.tpl');
}
else if($_GET['from']=='administrador' && $_GET['action']=='cadastro'){
	$smarty->display('form-usuario-cadastro-administrador.tpl');
}
else if($_GET['from']=='administrador' && $_GET['action']=='alteracao'){
	$coordenador= new Administrador();
	$result=$coordenador->listarAdministrador($_GET['id']);
	if($result!=false){
		$smarty->assign('administrador',$result);
	}
	$smarty->display('form-usuario-alteracao-administrador.tpl');
}
	

?>
