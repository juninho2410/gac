<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 00:33:13
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\consulta-curso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124564ec1c05014af18-16047143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48fbd73afc57e2950b988d0a98e93115bb6b40f' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\consulta-curso.tpl',
      1 => 1321324390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124564ec1c05014af18-16047143',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec1c05040a1e',
  'variables' => 
  array (
    'cursos' => 0,
    'curso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec1c05040a1e')) {function content_4ec1c05040a1e($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a>
		</div>
		<div class="title">
			<h3 class="user">Cursos</h3>
			<div class="actions">
				<a href="form-curso.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Coordenador</td>
					<td>A��o</td>
				</tr>
			</thead>
			<tbody>
			 <?php  $_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cursos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->key => $_smarty_tpl->tpl_vars['curso']->value){
$_smarty_tpl->tpl_vars['curso']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getNomeCoordenador();?>
</td>
					<td><a href="form-curso.php?action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['curso']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>