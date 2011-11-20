<?php
$permissao="Coordenador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/ac.class.php');
	
	$ac=new Atividade();
	$result=$ac->listarAcsCoordenadorDetalhes($_GET['id']);
	if($result!=false){
		$smarty->assign('ac',$result);	
	}
	$smarty->display('form-ac-detalhes.tpl');
	
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['aprovacao']) && isset($_POST['carga'])){
		
			$ac = new Atividade();
			
			
			if($_POST['aprovacao']==0){
				echo "Aprovado";
				$ac->setStatus('Aprovado');
				$ac->setCh($_POST['carga']);
				$ac->setComentario($_POST['comentario']);
				$ac->setId($_GET['id']);
				
				if($ac->altera($ac)){
					echo "<script>alert('Alterado com sucesso');location.href='consulta-ac-coordenador.php';</script>";
				}
				else{
					echo "<script>alert('Erro ao salvar');location.href='consulta-ac-coordenador.php';</script>";
				
				}			
			}
			else if($_POST['aprovacao']==1){
				$ac->setStatus('Reprovado');
				$ac->setCh($_POST['carga']);
				$ac->setComentario($_POST['comentario']);
				$ac->setId($_GET['id']);
				
				if($ac->altera($ac)){
					echo "<script>alert('Alterado com sucesso');location.href='consulta-ac-coordenador.php';</script>";
				}
				else{
					echo "<script>alert('Erro ao salvar');location.href='consulta-ac-coordenador.php';</script>";
				
				}
			}
			
		
		}
	}


?>
