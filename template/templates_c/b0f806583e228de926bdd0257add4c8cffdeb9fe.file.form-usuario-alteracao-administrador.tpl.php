<?php /* Smarty version Smarty 3.1.4, created on 2011-11-14 21:08:31
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-usuario-alteracao-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304414ec19f6f8775f1-17572794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f806583e228de926bdd0257add4c8cffdeb9fe' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-usuario-alteracao-administrador.tpl',
      1 => 1321311783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304414ec19f6f8775f1-17572794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'administrador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec19f6fa411f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec19f6fa411f')) {function content_4ec19f6fa411f($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=administrador">Administrador</a> ::
			<a href="form-usuario.php?from=administrador&action=alteracao">Alteração de Administradores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Administrador</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['administrador']->value[0]->getNome();?>
" />
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['administrador']->value[0]->getEmail();?>
"/>
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"  value="<?php echo $_smarty_tpl->tpl_vars['administrador']->value[0]->getSenha();?>
"/>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['administrador']->value[0]->getIdUsuario();?>
" />
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>