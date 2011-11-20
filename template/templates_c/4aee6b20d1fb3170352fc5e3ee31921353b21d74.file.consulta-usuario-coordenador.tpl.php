<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 16:09:21
         compiled from "template/templates\consulta-usuario-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183514ec9383c60a206-55505114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aee6b20d1fb3170352fc5e3ee31921353b21d74' => 
    array (
      0 => 'template/templates\\consulta-usuario-coordenador.tpl',
      1 => 1321810055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183514ec9383c60a206-55505114',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec9383c87db9',
  'variables' => 
  array (
    'coordenadores' => 0,
    'coordenador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec9383c87db9')) {function content_4ec9383c87db9($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
			<?php if ($_smarty_tpl->tpl_vars['coordenadores']->value!=false){?>
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
			<?php }else{ ?>
				<tr>
					<td colspan="4">Nenhum coordenador foi encontrado</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	
</div>
 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>