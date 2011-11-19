<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:53:25
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-usuario-cadastro-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285054ec13cdfd0d149-83612523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ef3d32b46e36875df087c3aac10abe76e50e65' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-usuario-cadastro-aluno.tpl',
      1 => 1321710797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285054ec13cdfd0d149-83612523',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec13cdff0286',
  'variables' => 
  array (
    'id' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec13cdff0286')) {function content_4ec13cdff0286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/libs/plugins\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a> ::
			<a href="form-aluno.php?action=cadastro">Cadastro de Alunos</a>
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
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50" value="<?php echo $_POST['senha'];?>
"/>
				</li>
				<li>
					<label for="curso">Curso:</label>
					<select name="curso">
					<?php if ($_POST['curso']==''){?>
						<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'selected'=>$_smarty_tpl->tpl_vars['id']->value[0],'output'=>$_smarty_tpl->tpl_vars['nome']->value),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'selected'=>$_POST['curso'],'output'=>$_smarty_tpl->tpl_vars['nome']->value),$_smarty_tpl);?>

					<?php }?>
					</select>
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>