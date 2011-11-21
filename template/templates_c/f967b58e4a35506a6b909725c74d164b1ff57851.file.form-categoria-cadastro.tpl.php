<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 00:22:20
         compiled from "template/templates\form-categoria-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121914ec989c49c7ce1-15464320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f967b58e4a35506a6b909725c74d164b1ff57851' => 
    array (
      0 => 'template/templates\\form-categoria-cadastro.tpl',
      1 => 1321842015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121914ec989c49c7ce1-15464320',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec989c4b6b80',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec989c4b6b80')) {function content_4ec989c4b6b80($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<script src='template/js/jquery.js' type='text/javascript'></script>
<script src='template/js/validaCategoria.js' type='text/javascript'></script>
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categoria</a> ::
			<a href="#">Cadastro de Categoria</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="categoria">Cadastro de Categoria</h3>
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
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlength="2"value="<?php echo $_POST['limite_atividade'];?>
" />
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlength="2" value="<?php echo $_POST['limite_categoria'];?>
"/>
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>