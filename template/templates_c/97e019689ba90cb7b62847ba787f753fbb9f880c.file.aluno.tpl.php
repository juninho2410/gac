<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 17:00:47
         compiled from "template/templates\aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102284ec94e5fda7ed8-60456091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97e019689ba90cb7b62847ba787f753fbb9f880c' => 
    array (
      0 => 'template/templates\\aluno.tpl',
      1 => 1321812733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102284ec94e5fda7ed8-60456091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec94e5feefbc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec94e5feefbc')) {function content_4ec94e5feefbc($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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