<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 18:27:54
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20894ec28a5a7741e3-22313117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c029e1db7786324f279142426d2c2ec4356754' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\aluno.tpl',
      1 => 1321734469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20894ec28a5a7741e3-22313117',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28a5a8dd2e',
  'variables' => 
  array (
    'teste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28a5a8dd2e')) {function content_4ec28a5a8dd2e($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-aluno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<p>Bem vindo <?php echo $_SESSION['nome'];?>
  </p>
</div>
<h1>
<?php echo $_smarty_tpl->tpl_vars['teste']->value;?>
</h1>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>