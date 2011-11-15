<?php /* Smarty version Smarty 3.1.4, created on 2011-11-14 12:55:55
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-aluno-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275104ec074985a0904-77031048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1cd38d9e6e8fdf18b938bfab1f9e4ede8c5f42' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-aluno-cadastro.tpl',
      1 => 1321282370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275104ec074985a0904-77031048',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec0749879f18',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec0749879f18')) {function content_4ec0749879f18($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a> ::
			<a href="form-aluno.php?action=cadastro">Cadastro</a>
		</div>
		<form method="post" action="#">
		<div class="title">
			<h3 class="user">Aluno</h3>
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
			<li>
				<label for="curso">Curso:</label>
				<select name="curso">
					<option value="4">ADS</option>
				</select>
			</li>
		</ul>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>