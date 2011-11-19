<?php /* Smarty version Smarty 3.1.4, created on 2011-11-18 19:37:54
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186904ec6d0320b9214-59765173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4eecfd5ac485d94bbcd363723d446804c83a504' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\coordenador.tpl',
      1 => 1321652154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186904ec6d0320b9214-59765173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec6d0322f80c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec6d0322f80c')) {function content_4ec6d0322f80c($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<p>Bem vindo  </p>
</div>
<h1>
<?php echo $_smarty_tpl->tpl_vars['teste']->value;?>
</h1>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>