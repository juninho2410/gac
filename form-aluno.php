<?php
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');
include_once('./template/includes/aluno.class.php');
include_once('./template/includes/validate.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro'){
			if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['curso'])){
			$validate= new validate();
				if(!$validate->email($_POST['email'])){
					echo "<script>alert('Email inválido!')</script>";
				
				}
				else{
				$aluno= new Aluno();
				$aluno->setNome($_POST['nome']);
				$aluno->setEmail($_POST['email']);
				$aluno->setLogin($_POST['login']);
				$aluno->setSenha($_POST['senha']);
				$aluno->setCurso($_POST['curso']);
				
				if($aluno->verificaDisponibilidade($aluno->getLogin())){
					if($aluno->insere($aluno)){
						echo "<script>alert('Aluno cadastrado com sucesso!');location.href='consulta-aluno.php';</script>";
					
					
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
						$aluno= new Aluno();
						$aluno->setNome($_POST['nome']);
						$aluno->setEmail($_POST['email']);
						$aluno->setSenha($_POST['senha']);
						$aluno->setRa($_POST['id']);
						if($aluno->altera($aluno)){
							echo "<script>alert('Alterado com sucesso!');location.href='consulta-aluno.php'</script>";
							
						
						}
						else{
							echo "<script>alert('Erro!');</script>";
						}
					}
			}
		}
		


	}


if($_GET['action']=='cadastro'){ 
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
else if($_GET['action']=='alteracao'){
	$aluno= new Aluno();
	$result=$aluno->listarAluno($_GET['id']);
	if($result!=false){
		$smarty->assign('aluno',$result);
	}
	$smarty->display('form-usuario-alteracao-aluno.tpl');
}
	

?>
