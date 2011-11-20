<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');

require_once('./template/includes/coordenador.class.php');
require_once('./template/includes/categoria.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro'){
			if(isset($_POST['nome']) && isset($_POST['limite_atividade']) && isset($_POST['limite_categoria'])){
				
				if(!is_numeric($_POST['limite_atividade'])){
					echo "<script>alert('Digite apenas números nos campos de Limite por atividade');</script>";
				
				}else if(!is_numeric($_POST['limite_categoria'])){
					echo "<script>alert('Digite apenas números nos campos de Limite por categoria');</script>";
				}
				else if($_POST['limite_atividade'] > $_POST['limite_categoria']){
					
					echo "<script>alert('Limite por atividade não pode ser maior que o limite por categoria');</script>";
				}
				else{
						$categoria= new Categoria();
						$categoria->setNome($_POST['nome']);
						$categoria->setLimiteAtividade($_POST['limite_atividade']);
						$categoria->setLimiteCategoria($_POST['limite_categoria']);
						
						
						
						if($categoria->insere($categoria)){
							echo "<script>alert('Categoria cadastrada com sucesso!');location.href='consulta-categoria.php';</script>";
						
						
						}
						else{
							echo "<script>alert('Erro ao cadastrar!')</script>";
						
						}
					}
				}
				
				
			
			
			}
				else if($_GET['action']=='alteracao') {
			if(isset($_POST['nome']) && isset($_POST['limite_atividade']) && isset($_POST['limite_categoria']) && isset($_POST['id'])){
				if(!is_numeric($_POST['limite_atividade'])){
					echo "<script>alert('Digite apenas números nos campos de Limite por atividade');</script>";
				
				}else if(!is_numeric($_POST['limite_categoria'])){
					echo "<script>alert('Digite apenas números nos campos de Limite por categoria');</script>";
				}
				else if($_POST['limite_atividade'] > $_POST['limite_categoria']){
					
					echo "<script>alert('Limite por atividade não pode ser maior que o limite por categoria');</script>";
				}
				else{
					$categoria= new Categoria();
					$categoria->setNome($_POST['nome']);
					$categoria->setLimiteAtividade($_POST['limite_atividade']);
					$categoria->setLimiteCategoria($_POST['limite_categoria']);
					$categoria->setId($_POST['id']);
					if($categoria->altera($categoria)){
						echo "<script>alert('Alterado com sucesso!');location.href='consulta-categoria.php'</script>";
					}
					else{
						echo "<script>alert('Erro!');</script>";
					}
				}
			}
		}
	}


if($_GET['action']=='cadastro'){ 
	$smarty->display('form-categoria-cadastro.tpl');
}
else if($_GET['action']=='alteracao'){
	$categoria= new Categoria();
	$result=$categoria->listarCategoria($_GET['id']);
	if($result!=false){
		$smarty->assign('categoria',$result);
	}
	$smarty->display('form-categoria-alteracao.tpl');
}

?>
