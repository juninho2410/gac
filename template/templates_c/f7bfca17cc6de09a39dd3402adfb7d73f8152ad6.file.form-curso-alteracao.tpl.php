<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 22:29:35
         compiled from "template/templates\form-curso-alteracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255124ec943560957c6-84857282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7bfca17cc6de09a39dd3402adfb7d73f8152ad6' => 
    array (
      0 => 'template/templates\\form-curso-alteracao.tpl',
      1 => 1321835365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255124ec943560957c6-84857282',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec9435626cb7',
  'variables' => 
  array (
    'curso' => 0,
    'id' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec9435626cb7')) {function content_4ec9435626cb7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'libs/plugins\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<script src='template/js/jquery.js' type='text/javascript'></script>
<script src='template/js/validaCurso.js' type='text/javascript'></script>
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a> ::
			<a href="form-usuario.php?action=alteracao">Alteração de Cursos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Cursos</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]->getNome();?>
" />
				</li>
				<li>
					<label for="coordenador">Curso:</label>
					<select name="coordenador">
							<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'selected'=>$_smarty_tpl->tpl_vars['curso']->value[0]->getIdCoordenador(),'output'=>$_smarty_tpl->tpl_vars['nome']->value),$_smarty_tpl);?>

					</select>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]->getId();?>
" />
				</li>
			
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>