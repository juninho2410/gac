<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 11:25:56
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-curso-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206614ec1c07a557310-40831252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070ec58301fe58b8b8742feffd4b84461528d0dd' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-curso-cadastro.tpl',
      1 => 1321363543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206614ec1c07a557310-40831252',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec1c07a6d85f',
  'variables' => 
  array (
    'id' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec1c07a6d85f')) {function content_4ec1c07a6d85f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/libs/plugins\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a> ::
			<a href="form-curso.php?action=cadastro">Cadastro de Cursos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Cursos</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="coordenador">Coordenador:</label>
					<select name="coordenador">
						<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'selected'=>$_smarty_tpl->tpl_vars['id']->value[0],'output'=>$_smarty_tpl->tpl_vars['nome']->value),$_smarty_tpl);?>

					</select>
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>