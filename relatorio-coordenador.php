<?php

include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/aluno.class.php');
	$aluno=new Aluno();

	$result=$aluno->relatorioAtividadesSolicitadas();

	if($result!=false){
		$smarty->assign('relatorios',$result);	
	}
	$smarty->display('relatorio-coordenador.tpl');



?>
