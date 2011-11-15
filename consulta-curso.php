<?php

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');




	require_once('./template/includes/cursos.class.php');
	$curso= new Curso();
	$result=$curso->listarCursos();
	$smarty->assign('cursos',$result);
	$smarty->display('consulta-curso.tpl');


?>
