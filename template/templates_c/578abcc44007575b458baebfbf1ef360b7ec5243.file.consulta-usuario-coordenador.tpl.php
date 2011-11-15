<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:01:15
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\consulta-usuario-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74124ec27ebbdfee87-43627798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578abcc44007575b458baebfbf1ef360b7ec5243' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\\consulta-usuario-coordenador.tpl',
      1 => 1321294632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74124ec27ebbdfee87-43627798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'coordenadores' => 0,
    'coordenador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec27ebc07a14',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec27ebc07a14')) {function content_4ec27ebc07a14($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=coordenador">Coordenador</a>
		</div>
		<div class="title">
			<h3 class="user">Coordenador</h3>
			<div class="actions">
				<a href="form-usuario.php?from=coordenador&action=cadastro">Incluir</a>
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
					<td><a href="form-usuario.php?from=coordenador&action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['coordenador']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>