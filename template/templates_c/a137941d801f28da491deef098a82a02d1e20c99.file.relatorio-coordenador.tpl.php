<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 20:13:51
         compiled from "template/templates\relatorio-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203204ec97b9f951032-66354557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a137941d801f28da491deef098a82a02d1e20c99' => 
    array (
      0 => 'template/templates\\relatorio-coordenador.tpl',
      1 => 1321812738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203204ec97b9f951032-66354557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'relatorios' => 0,
    'relatorio' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec97b9fbb6a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec97b9fbb6a1')) {function content_4ec97b9fbb6a1($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
			<?php if ($_smarty_tpl->tpl_vars['relatorios']->value!=false){?>
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
			<?php }else{ ?>
				<tr>
					<td colspan="2">Nenhuma atividade foi aprovada para gerar dados.</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>