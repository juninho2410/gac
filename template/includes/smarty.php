<?php
	define('TEMPLATE_PATH', $_SERVER['DOCUMENT_ROOT'].'/gac/template/');
	define('SMARTY_DIR', $_SERVER['DOCUMENT_ROOT'].'/gac/libs/');
	require_once(SMARTY_DIR.'Smarty.class.php');
	$smarty = new Smarty;
	//$smarty->force_compile = true;
	$smarty->debugging = true;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;
	$smarty->template_dir = TEMPLATE_PATH.'templates/';
	$smarty->compile_dir = TEMPLATE_PATH.'templates_c/';
	$smarty->config_dir = TEMPLATE_PATH.'configs/';
	$smarty->cache_dir = TEMPLATE_PATH.'/cache/';
	$smarty->assign('dir','/gac/template/');
	?>