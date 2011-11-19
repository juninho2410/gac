<?php

include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');
include_once('./template/includes/coordenador.class.php');
	$coordenador=new Coordenador();

	$result=$coordenador->relatorioAtividadesSolicitadas($_SESSION['id']);

	if($result!=false){
	$total=0;
		foreach($result as $item=>$value){
			$total+=$value['total'];
		}
	
		$smarty->assign('total',$total);	
		$smarty->assign('relatorios',$result);	
	}
	$smarty->display('relatorio-coordenador.tpl');



?>
