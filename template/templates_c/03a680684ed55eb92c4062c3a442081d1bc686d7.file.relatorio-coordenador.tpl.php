<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 10:45:56
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\relatorio-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31834ec79fa536e834-75091739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a680684ed55eb92c4062c3a442081d1bc686d7' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\relatorio-coordenador.tpl',
      1 => 1321706753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31834ec79fa536e834-75091739',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec79fa55ca38',
  'variables' => 
  array (
    'relatorios' => 0,
    'relatorio' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec79fa55ca38')) {function content_4ec79fa55ca38($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="relatorio-coordenador.php">Relatório</a>
		</div>
		<div class="title">
			<h3 class="user">Relatório de Categorias Solicitadas</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Porcentagem</td>
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
					<td><?php echo sprintf("%.2f",(($_smarty_tpl->tpl_vars['relatorio']->value['total']/$_smarty_tpl->tpl_vars['total']->value)*100));?>
%</td>
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>