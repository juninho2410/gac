<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 21:35:38
         compiled from "template/templates\form-usuario-alteracao-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103974ec999bd4ceb87-92940905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550d7ee314b8a7075e08f14a4579b7d53a8bd6a0' => 
    array (
      0 => 'template/templates\\form-usuario-alteracao-aluno.tpl',
      1 => 1321913551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103974ec999bd4ceb87-92940905',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec999bd6a10f',
  'variables' => 
  array (
    'aluno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec999bd6a10f')) {function content_4ec999bd6a10f($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<script src='template/js/jquery.js' type='text/javascript'></script>
<script src='template/js/functions.js' type='text/javascript'></script>
<script src='template/js/validaUsuarioAlteracao.js' type='text/javascript'></script>
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a> ::
			<a href="#">Alteração de Aluno</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="aluno">Alteração de Aluno</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['aluno']->value[0]->getNome();?>
" />
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['aluno']->value[0]->getEmail();?>
"/>
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"  value="<?php echo $_smarty_tpl->tpl_vars['aluno']->value[0]->getSenha();?>
"/>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aluno']->value[0]->getIdUsuario();?>
" />
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>