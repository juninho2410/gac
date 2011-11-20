<?php
$permissao="Administrador";
include_once('./template/includes/smarty.php');
include_once('./template/includes/sessao.php');




	require_once('./template/includes/categoria.class.php');
	$categoria= new Categoria();
	$result=$categoria->listarCategorias();
	$smarty->assign('categorias',$result);
	$smarty->display('consulta-categoria.tpl');


?>
