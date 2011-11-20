<?php
$permissao="Aluno";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/aluno.class.php');
	$aluno=new Aluno();

	$result=$aluno->relatorioPorTipo($_SESSION['id']);

	if($result!=false){
		$smarty->assign('relatorios',$result);	
	}
	$smarty->display('relatorio-aluno.tpl');



?>
