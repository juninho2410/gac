<?php
$permissao="Coordenador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/ac.class.php');
	
	$ac=new Atividade();
	$result=$ac->listarAcsCoordenador($_SESSION['id']);
	if($result!=false){
		$smarty->assign('acs',$result);	
	}
	$smarty->display('consulta-ac-coordenador.tpl');




?>
