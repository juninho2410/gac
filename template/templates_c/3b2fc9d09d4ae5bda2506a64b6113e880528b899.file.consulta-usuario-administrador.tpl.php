<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:01:18
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\consulta-usuario-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235814ec27ebe2704e2-58742709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2fc9d09d4ae5bda2506a64b6113e880528b899' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\\consulta-usuario-administrador.tpl',
      1 => 1321364555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235814ec27ebe2704e2-58742709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'administradores' => 0,
    'administrador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec27ebe434d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec27ebe434d6')) {function content_4ec27ebe434d6($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=administrador">Administrador</a>
		</div>
		<div class="title">
			<h3 class="user">Administrador</h3>
			<div class="actions">
				<a href="form-usuario.php?from=administrador&action=cadastro">Incluir</a>
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
					<td><a href="form-usuario.php?from=administrador&action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['administrador']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>