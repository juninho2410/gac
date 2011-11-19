<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 09:40:20
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\relatorio-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313324ec793fc0db802-74409788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927a6d2d0fff5a3ae2c60df54871a4233e94b9ab' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\relatorio-aluno.tpl',
      1 => 1321702816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313324ec793fc0db802-74409788',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec793fc2bdf0',
  'variables' => 
  array (
    'relatorios' => 0,
    'relatorio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec793fc2bdf0')) {function content_4ec793fc2bdf0($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-aluno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="relatorio-aluno.php">Relatório</a>
		</div>
		<div class="title">
			<h3 class="user">Relatório</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Total de Carga Horária</td>
				</tr>
			</thead>
			<tbody>
			 <?php  $_smarty_tpl->tpl_vars['relatorio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relatorio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relatorios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relatorio']->key => $_smarty_tpl->tpl_vars['relatorio']->value){
$_smarty_tpl->tpl_vars['relatorio']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['relatorio']->value['Nome'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['relatorio']->value['total'];?>
</td>
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>