<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:24:06
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201084ec28416b20c58-20067171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61499054288ec0ca9220c9347aae2e765c008827' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\\administrador.tpl',
      1 => 1321370476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201084ec28416b20c58-20067171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28416c2b41',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28416c2b41')) {function content_4ec28416c2b41($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<p>Bem vindo <?php echo $_SESSION['nome'];?>
 </p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>