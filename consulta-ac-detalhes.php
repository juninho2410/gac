<?php
$permissao="Coordenador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/ac.class.php');
include_once('./template/includes/aluno.class.php');
include_once('./template/includes/categoria.class.php');
	
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
				$aluno= new Aluno();
				$categoria= new Categoria();
				$limites=$categoria->listarLimiteCategoria($_POST['idCategoria']);
				$qtdeHorasCategoria=$aluno->quantidadeHorasCategoria($_POST['ra'],$_POST['idCategoria']);
				$qtdeHorasResultante=$qtdeHorasCategoria+$_POST['carga'];
				if($qtdeHorasResultante > $limites[0]['limite_categoria']){
					echo "<script>alert('Você não pode aprovar esta Atividade! Este aluno já tem $qtdeHorasCategoria horas nesta categoria, o limite desta categoria é ". $limites[0]['limite_categoria'].". Altere a carga para um valor inferior caso queira aprovar esta Atividade!')</script>";
				}
				else{
				
					$ac->setStatus('Aprovado');
					$ac->setCh($_POST['carga']);
					$ac->setComentario($_POST['comentario']);
					$ac->setId($_GET['id']);
					
					if($ac->altera($ac)){
						echo "<script>alert('Aprovado com sucesso');location.href='consulta-ac-coordenador.php';</script>";
					}
					else{
						echo "<script>alert('Erro ao salvar');location.href='consulta-ac-coordenador.php';</script>";
					
					}	
				}		
			}
			else if($_POST['aprovacao']==1){
				if($_POST['comentario']==""){
					echo "<script>alert('Insira um comentário a respeito da sua reprovação')</script>";
				}
				else{
					$ac->setStatus('Reprovado');
					$ac->setCh($_POST['carga']);
					$ac->setComentario($_POST['comentario']);
					$ac->setId($_GET['id']);
					
					if($ac->altera($ac)){
						echo "<script>alert('Reprovado com sucesso');location.href='consulta-ac-coordenador.php';</script>";
					}
					else{
						echo "<script>alert('Erro ao salvar');location.href='consulta-ac-coordenador.php';</script>";
					
					}
				}
			}
			
		
		}
	}


?>
