<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 21:36:08
         compiled from "template/templates\consulta-usuario-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208984ec98932bf71d7-30094214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3d9b00689e508fa3d6e4348cdd0e1cae3a03b4a' => 
    array (
      0 => 'template/templates\\consulta-usuario-administrador.tpl',
      1 => 1321913543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208984ec98932bf71d7-30094214',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec98932d6b27',
  'variables' => 
  array (
    'administradores' => 0,
    'administrador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec98932d6b27')) {function content_4ec98932d6b27($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-administrador.php">Consulta de Administradores</a>
		</div>
		<div class="title">
			<h3 class="administrador">Administradores</h3>
			<div class="actions">
				<a href="form-administrador.php?action=cadastro">Incluir</a>
			</div>
		</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Email</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			<?php if ($_smarty_tpl->tpl_vars['administradores']->value!=false){?>
			 <?php  $_smarty_tpl->tpl_vars['administrador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['administrador']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['administrador']->key => $_smarty_tpl->tpl_vars['administrador']->value){
$_smarty_tpl->tpl_vars['administrador']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['administrador']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['administrador']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['administrador']->value->getEmail();?>
</td>
					<td><a href="form-administrador.php?action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['administrador']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			<?php }else{ ?>
				<tr>
					<td colspan="4">Nenhum administrador foi encontrado</td>
				</tr>
			
			<?php }?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>