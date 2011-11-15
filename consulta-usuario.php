<?php

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');



if($_GET['from']=="aluno"){
	include_once('./template/includes/aluno.class.php');
	$aluno= new Aluno();
	$result=$aluno->listarAlunos();
	$smarty->assign('alunos',$result);
	$smarty->display('consulta-usuario-aluno.tpl');
}
else if($_GET['from']=="coordenador"){
	include_once('./template/includes/coordenador.class.php');
	$aluno= new Coordenador();
	$result=$aluno->listarCoordenadores();
	$smarty->assign('coordenadores',$result);
	$smarty->display('consulta-usuario-coordenador.tpl');
}
else if($_GET['from']=="administrador"){
	include_once('./template/includes/administrador.class.php');
	$aluno= new Administrador();
	$result=$aluno->listarAdministradores();
	$smarty->assign('administradores',$result);
	$smarty->display('consulta-usuario-administrador.tpl');
}


?>
