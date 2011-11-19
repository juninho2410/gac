<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:16:41
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-usuario-cadastro-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248194ec15bf2a48be0-87420201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7bb970d86e698a5be5e34641b91cceca8b8ebe3' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-usuario-cadastro-coordenador.tpl',
      1 => 1321708262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248194ec15bf2a48be0-87420201',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec15bf2c1f8f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec15bf2c1f8f')) {function content_4ec15bf2c1f8f($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-coordenador.php">Coordenador</a> ::
			<a href="form-coordenador.php?action=cadastro">Cadastro de Coordenadores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Coordenadores</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" />
				</li>
				<li>
					<label for="login">Login:</label><input type="text" name="login" id="login" maxlenght="100" />
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50" />
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>