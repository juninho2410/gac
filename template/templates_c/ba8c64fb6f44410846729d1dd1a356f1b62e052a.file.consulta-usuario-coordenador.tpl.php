<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:16:17
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\consulta-usuario-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217774ec15aabe31991-78376810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8c64fb6f44410846729d1dd1a356f1b62e052a' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\consulta-usuario-coordenador.tpl',
      1 => 1321707956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217774ec15aabe31991-78376810',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec15aac15e41',
  'variables' => 
  array (
    'coordenadores' => 0,
    'coordenador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec15aac15e41')) {function content_4ec15aac15e41($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-coordenador.php">Coordenador</a>
		</div>
		<div class="title">
			<h3 class="user">Coordenador</h3>
			<div class="actions">
				<a href="form-coordenador.php?action=cadastro">Incluir</a>
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
			 <?php  $_smarty_tpl->tpl_vars['coordenador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coordenador']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coordenadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coordenador']->key => $_smarty_tpl->tpl_vars['coordenador']->value){
$_smarty_tpl->tpl_vars['coordenador']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['coordenador']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['coordenador']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['coordenador']->value->getEmail();?>
</td>
					<td><a href="form-coordenador.php?action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['coordenador']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>