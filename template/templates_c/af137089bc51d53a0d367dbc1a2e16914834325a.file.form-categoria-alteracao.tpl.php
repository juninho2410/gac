<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:44:37
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-categoria-alteracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91764ec2b24e4fa522-57816714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af137089bc51d53a0d367dbc1a2e16914834325a' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-categoria-alteracao.tpl',
      1 => 1321382550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91764ec2b24e4fa522-57816714',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec2b24e7171a',
  'variables' => 
  array (
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec2b24e7171a')) {function content_4ec2b24e7171a($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categorias</a> ::
			<a href="form-categoria.php?action=alteracao">Alteração de Categorias</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Categorias</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value[0]->getNome();?>
" />
				</li>
				<li>
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlenght="2" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value[0]->getLimiteAtividade();?>
"/>
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlenght="2" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value[0]->getLimiteCategoria();?>
"/>
				</li>
				<li>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value[0]->getId();?>
" />
				</li>
			
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>