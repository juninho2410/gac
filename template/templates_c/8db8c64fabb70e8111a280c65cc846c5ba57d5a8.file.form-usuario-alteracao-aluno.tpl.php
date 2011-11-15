<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:01:09
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\form-usuario-alteracao-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37834ec27eb5ae21e0-78741852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db8c64fabb70e8111a280c65cc846c5ba57d5a8' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\\form-usuario-alteracao-aluno.tpl',
      1 => 1321292412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37834ec27eb5ae21e0-78741852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aluno' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec27eb5c8b2b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec27eb5c8b2b')) {function content_4ec27eb5c8b2b($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=aluno">Aluno</a> ::
			<a href="form-usuario.php?from=aluno&action=alteracao">Alteração de Alunos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Aluno</h3>
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