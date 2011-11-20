<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');


	include_once('./template/includes/administrador.class.php');
	$aluno= new Administrador();
	$result=$aluno->listarAdministradores();
	$smarty->assign('administradores',$result);
	$smarty->display('consulta-usuario-administrador.tpl');


?>
