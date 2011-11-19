<?php

include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');

require_once('./template/includes/coordenador.class.php');
require_once('./template/includes/categoria.class.php');
require_once('./template/includes/ac.class.php');




	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro'){
			if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['descricao']) && isset($_POST['data']) && isset($_POST['carga']) && isset($_FILES['arquivo'])){
				$ac= new Atividade();
				$ac->setIdAlunoRa($_SESSION['id']);
				$ac->setTitulo($_POST['titulo']);
				$ac->setIdCategoria($_POST['categoria']);
				$ac->setDescricao($_POST['descricao']);
				$ac->setDataRealizacao($_POST['data']);
				$ac->setCh($_POST['carga']);
				$file=explode('.',$_FILES['arquivo']['name']);
				$ac->setNomeArquivo('ac.'.$file[1]);
				$nomeArquivo=$ac->insere($ac);
				
				
					if($nomeArquivo!=false){
						//echo "<script>alert('Categoria cadastrado com sucesso!');location.href='consulta-ac.php';</script>";
							$diretorio='comprovantes';
						if(!is_dir($diretorio)){
						
							mkdir($diretorio);// Cria diretorio
							chmod($diretorio,0777);//Seta permissao total
			
						}
						$dir = "$diretorio/".$nomeArquivo;
						move_uploaded_file($_FILES['arquivo']["tmp_name"],$dir);
						echo "<script>alert('Atividade cadastrado com sucesso!');location.href='consulta-ac.php';</script>";
						echo $arquivo;
					
					}
					else{
						echo "<script>alert('Erro ao cadastrar!')</script>";
					
					}
				}
				
				
			
			
			}
				else if($_GET['action']=='alteracao') {
			if(isset($_POST['nome']) && isset($_POST['limite_atividade']) && isset($_POST['limite_categoria']) && isset($_POST['id'])){
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


if($_GET['action']=='cadastro'){ 
	$categoria= new Categoria();
	$result=$categoria->listaDropCategorias();
	if($result!=false){
		$id=$result[0];
		$nome=$result[1];
		
		$smarty->assign('id',$id);
		$smarty->assign('nome',$nome);
		$smarty->display('form-ac-cadastro.tpl');
		
	}

	
}
/*
else if($_GET['action']=='alteracao'){
	$categoria= new Categoria();
	$result=$categoria->listarCategoria($_GET['id']);
	if($result!=false){
		$smarty->assign('categoria',$result);
	}
	$smarty->display('form-categoria-alteracao.tpl');
}*/

?>
