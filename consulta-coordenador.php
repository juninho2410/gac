<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');





	include_once('./template/includes/coordenador.class.php');
	$coordenador= new Coordenador();
	$result=$coordenador->listarCoordenadores();
	$smarty->assign('coordenadores',$result);
	$smarty->display('consulta-usuario-coordenador.tpl');


?>
