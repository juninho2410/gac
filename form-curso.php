<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
require_once('./template/includes/coordenador.class.php');
require_once('./template/includes/cursos.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro'){
			if(isset($_POST['nome']) && isset($_POST['coordenador'])){
				$curso= new Curso();
				$curso->setNome($_POST['nome']);
				$curso->setIdCoordenador($_POST['coordenador']);

				
				
					if($curso->insere($curso)){
						echo "<script>alert('Curso cadastrado com sucesso!');location.href='consulta-curso.php';</script>";
					
					
					}
					else{
						echo "<script>alert('Erro ao cadastrar!')</script>";
					
					}
				}
				
				
			
			
			}
				else if($_GET['action']=='alteracao') {
			if(isset($_POST['nome']) && isset($_POST['coordenador'])){
				$curso= new Curso();
				$curso->setNome($_POST['nome']);
				$curso->setIdCoordenador($_POST['coordenador']);
				$curso->setId($_POST['id']);
				if($curso->altera($curso)){
					echo "<script>alert('Alterado com sucesso!');location.href='consulta-curso.php'</script>";
				}
				else{
					echo "<script>alert('Erro!');</script>";
				}
		
			}
		}
	}


if($_GET['action']=='cadastro'){ 
	
	$coordenador = new Coordenador();
	$result=$coordenador->listaDropCoordenadores();
	
	
	if($result!=false){
		$id=$result[0];
		$nome=$result[1];
		$smarty->assign('id',$id);
		$smarty->assign('nome',$nome);
		$smarty->display('form-curso-cadastro.tpl');
	}
	
}
else if($_GET['action']=='alteracao'){
	$curso= new Curso();
	$result=$curso->listarCurso($_GET['id']);
	if($result!=false){
		$smarty->assign('curso',$result);
	}
	$coordenador = new Coordenador();
	$result=$coordenador->listaDropCoordenadores();
	if($result!=false){
		$id=$result[0];
		$nome=$result[1];
		$smarty->assign('id',$id);
		$smarty->assign('nome',$nome);
	}
	$smarty->display('form-curso-alteracao.tpl');
}

?>
