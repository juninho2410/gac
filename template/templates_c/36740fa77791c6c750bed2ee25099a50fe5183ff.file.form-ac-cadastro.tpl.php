<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 19:00:02
         compiled from "template/templates\form-ac-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200324ec94f0edb01f5-06232699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36740fa77791c6c750bed2ee25099a50fe5183ff' => 
    array (
      0 => 'template/templates\\form-ac-cadastro.tpl',
      1 => 1321842520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200324ec94f0edb01f5-06232699',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec94f0eea252',
  'variables' => 
  array (
    'id' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec94f0eea252')) {function content_4ec94f0eea252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'libs/plugins\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-aluno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<script src='template/js/jquery.js' type='text/javascript'></script>
<script src='template/js/formatadores.js' type='text/javascript'></script>
<script src='template/js/functions.js' type='text/javascript'></script>
<script src='template/js/validaCadastroAc.js' type='text/javascript'></script>

<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="#">Cadastro de Atividade Complementar</a>
		</div>
		<form method="post" action="#" enctype="multipart/form-data">
			<div class="title">
				<h3 class="atividade">Cadastro de Atividade Complementar</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" maxlength="150" value="<?php echo $_POST['titulo'];?>
"/>
				</li>
				<li>
					<label for="categoria">Categoria:</label>
					<select name="categoria">
						<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['nome']->value),$_smarty_tpl);?>

					</select>
				</li>
				<li>
					<label for="descricao">Descrição:</label><textarea name="descricao" id="descricao" rows="5" cols="40"><?php echo $_POST['descricao'];?>
</textarea>
				</li>
				<li>
					<label for="data">Data de Realização:</label><input type="text" name="data" id="data" maxlength="10" value="<?php echo $_POST['data'];?>
" onkeyup="formataData(this,event);"/>
				</li>
				<li>
					<label for="ch">Carga Horária:</label><input type="text" name="carga" id="ch" maxlength="2" value="<?php echo $_POST['carga'];?>
" />
				</li>
				<li>
					<label for="arquivo">Anexo:</label><input type="file" name="arquivo" id="arquivo" value="" />
				</li>
			</ul>
		</form>
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>