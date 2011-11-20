<?php
$permissao="Administrador";

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');



	include_once('./template/includes/aluno.class.php');
	$aluno= new Aluno();
	$result=$aluno->listarAlunos();
	$smarty->assign('alunos',$result);
	$smarty->display('consulta-usuario-aluno.tpl');



?>
