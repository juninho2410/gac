<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 00:22:12
         compiled from "template/templates\form-categoria-alteracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109764ec99a824b6f90-52056639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca88bdac15adc3b92830220d7350b836325b3e6' => 
    array (
      0 => 'template/templates\\form-categoria-alteracao.tpl',
      1 => 1321842008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109764ec99a824b6f90-52056639',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec99a826ba9f',
  'variables' => 
  array (
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec99a826ba9f')) {function content_4ec99a826ba9f($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<script src='template/js/jquery.js' type='text/javascript'></script>
<script src='template/js/validaCategoria.js' type='text/javascript'></script>
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categorias</a> ::
			<a href="#">Alteração de Categoria</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="categoria">Alteração de Categoria</h3>
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