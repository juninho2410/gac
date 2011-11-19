<?php

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');





	include_once('./template/includes/coordenador.class.php');
	$aluno= new Coordenador();
	$result=$aluno->listarCoordenadores();
	$smarty->assign('coordenadores',$result);
	$smarty->display('consulta-usuario-coordenador.tpl');


?>
