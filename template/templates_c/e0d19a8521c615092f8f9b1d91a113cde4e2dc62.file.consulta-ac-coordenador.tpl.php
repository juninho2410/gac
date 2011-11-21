<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 20:16:51
         compiled from "template/templates\consulta-ac-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153854ec97ba2f15466-94172586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d19a8521c615092f8f9b1d91a113cde4e2dc62' => 
    array (
      0 => 'template/templates\\consulta-ac-coordenador.tpl',
      1 => 1321913531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153854ec97ba2f15466-94172586',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec97ba31d08c',
  'variables' => 
  array (
    'acs' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec97ba31d08c')) {function content_4ec97ba31d08c($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="consulta-ac.php?from=coordenador">Consulta de Atividades Pendentes</a>
		</div>
		<div class="title">
			<h3 class="atividade">Consulta de Atividades Pendentes</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Título</td>
					<td>Status</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			<?php if ($_smarty_tpl->tpl_vars['acs']->value!=false){?>
			 <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getTitulo();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getStatus();?>
</td>
					<td><a href="consulta-ac-detalhes.php?id=<?php echo $_smarty_tpl->tpl_vars['ac']->value->getId();?>
">Detalhes</a></td>                
                </tr>
                <?php } ?>
			<?php }else{ ?>
				<tr>
					<td colspan="4">Nenhuma atividade foi encontrada</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>