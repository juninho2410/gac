<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:45:36
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-usuario-cadastro-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257944ec1b3960cfeb9-83130137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318908340461ff33d1a5f03fb1adf7a73b602d87' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-usuario-cadastro-administrador.tpl',
      1 => 1321710334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257944ec1b3960cfeb9-83130137',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec1b39621cfa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec1b39621cfa')) {function content_4ec1b39621cfa($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-administrador.php">Administrador</a> ::
			<a href="form-administrador.php?action=cadastro">Cadastro de Administradores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Administradores</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_POST['nome'];?>
"/>
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="<?php echo $_POST['email'];?>
" />
				</li>
				<li>
					<label for="login">Login:</label><input type="text" name="login" id="login" maxlenght="100" value="<?php echo $_POST['login'];?>
" />
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"value="<?php echo $_POST['senha'];?>
" />
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>