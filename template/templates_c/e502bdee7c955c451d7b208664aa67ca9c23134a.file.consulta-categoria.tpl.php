<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:33:58
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\consulta-categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64794ec2ae96dbd417-09646051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e502bdee7c955c451d7b208664aa67ca9c23134a' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\consulta-categoria.tpl',
      1 => 1321381921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64794ec2ae96dbd417-09646051',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec2ae97107ca',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec2ae97107ca')) {function content_4ec2ae97107ca($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Categorias</a>
		</div>
		<div class="title">
			<h3 class="user">Categorias</h3>
			<div class="actions">
				<a href="form-categoria.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Limite por Atividade</td>
					<td>Limite por Categoria</td>
					<td>A��o</td>
				</tr>
			</thead>
			<tbody>
			 <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->getLimiteAtividade();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->getLimiteCategoria();?>
</td>
					<td><a href="form-categoria.php?action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>