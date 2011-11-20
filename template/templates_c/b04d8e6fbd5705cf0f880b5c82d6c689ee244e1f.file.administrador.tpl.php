<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 15:26:14
         compiled from "template/templates\administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142174ec938360f70b6-55168359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04d8e6fbd5705cf0f880b5c82d6c689ee244e1f' => 
    array (
      0 => 'template/templates\\administrador.tpl',
      1 => 1321370476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142174ec938360f70b6-55168359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec9383627d89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec9383627d89')) {function content_4ec9383627d89($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<p>Bem vindo <?php echo $_SESSION['nome'];?>
 </p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>