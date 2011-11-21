<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 00:18:37
         compiled from "template/templates\consulta-categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259184ec989c354d460-37874352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480747f84b67157601a067b1d2661cf7e3e23a4a' => 
    array (
      0 => 'template/templates\\consulta-categoria.tpl',
      1 => 1321841872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259184ec989c354d460-37874352',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec989c36ff32',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec989c36ff32')) {function content_4ec989c36ff32($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Categorias</a>
		</div>
		<div class="title">
			<h3 class="categoria">Categorias</h3>
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
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			<?php if ($_smarty_tpl->tpl_vars['categorias']->value!=false){?>
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
			<?php }else{ ?>
				<tr>
					<td colspan="5">Nenhuma categoria foi encontrada</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>