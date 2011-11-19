<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:16:22
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-usuario-alteracao-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194554ec18da996f755-49754505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7a08e7b0f26ffbc83b4a9f6536d38e507a3f13' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-usuario-alteracao-coordenador.tpl',
      1 => 1321708140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194554ec18da996f755-49754505',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec18da9bf174',
  'variables' => 
  array (
    'coordenador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec18da9bf174')) {function content_4ec18da9bf174($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-coordenador.php">Coordenador</a> ::
			<a href="form-coordenador.php?action=alteracao">Alteração de Coordenadores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Coordenador</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['coordenador']->value[0]->getNome();?>
" />
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['coordenador']->value[0]->getEmail();?>
"/>
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"  value="<?php echo $_smarty_tpl->tpl_vars['coordenador']->value[0]->getSenha();?>
"/>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['coordenador']->value[0]->getIdUsuario();?>
" />
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>