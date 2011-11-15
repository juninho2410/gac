<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:38:57
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-categoria-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190214ec2b1c14b5533-64412212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dcfa2c0b49322e3531a1f4c925409c867256e35' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-categoria-cadastro.tpl',
      1 => 1321378923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190214ec2b1c14b5533-64412212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec2b1c167c44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec2b1c167c44')) {function content_4ec2b1c167c44($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categoria</a> ::
			<a href="form-categoria.php?action=cadastro">Cadastro de Categorias</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Categorias</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlenght="2"/>
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlenght="2"/>
				</li>
			</ul>
		</form>
		
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>