<?php
$permissao="Aluno";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');

require_once('./template/includes/coordenador.class.php');
require_once('./template/includes/categoria.class.php');
require_once('./template/includes/ac.class.php');


define('MB',1048576);

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_GET['action']=='cadastro'){
			if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['descricao']) && isset($_POST['data']) && isset($_POST['carga']) && isset($_FILES['arquivo'])){
				$categoria = new Categoria();
				$limites=$categoria->listarLimiteCategoria($_POST['categoria']);
				$tamanhoArquivo=$_FILES['arquivo']['size'];
				$tamanhoPermitido=5*MB;
				$fileName=$_FILES['arquivo']['name'];
				$fileExtension=explode('.',$fileName);
				$fileExtension=$fileExtension[1];
				$extensoesPermitidas=array('pdf','jpg','png','gif');
		
		
				if(!is_numeric($_POST['carga'])){
					echo "<script>alert('Digite apenas números na Carga horária')</script>";
				}else if($limites[0]['limite_atividade']!=0){
					if($_POST['carga'] > $limites[0]['limite_atividade']){
						echo "<script>alert('O limite de carga horária permitido para esta atividade é de ".$limites[0]['limite_atividade'] .". Favor inserir valor inferior a este limite! ')</script>";
						
					}
				
				}else if($_POST['carga'] > $limites[0]['limite_categoria']){
				
						echo "<script>alert('O limite de carga horária permitido para esta categoria é de ".$limites[0]['limite_categoria'] .". Favor inserir valor inferior a este limite! ')</script>";
				
				}
				else if($tamanhoArquivo>$tamanhoPermitido){
						echo "<script>alert('Tamanho superior a 5 mb. Anexe um arquivo inferior a 5 mb.')</script>";
				}
				else if(!in_array($fileExtension,$extensoesPermitidas)){
						echo "<script>alert('Extensão não permitida.')</script>";
				}
				
				else{
				

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
							echo "<script>alert('Atividade cadastrada com sucesso!');location.href='consulta-ac.php';</script>";
							echo $arquivo;
						
						}
						else{
							echo "<script>alert('Erro ao cadastrar!')</script>";
						
						}
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
