<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 13:01:23
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-ac-aluno-detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141734ec7c46ccfcad9-65685983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70afa4252b256f1307a2365c17a048dea4ebdc8' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-ac-aluno-detalhes.tpl',
      1 => 1321714879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141734ec7c46ccfcad9-65685983',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec7c46ceeaac',
  'variables' => 
  array (
    'ac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec7c46ceeaac')) {function content_4ec7c46ceeaac($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-aluno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="consulta-ac.php">Consulta de AC</a> ::
			<a href="consulta-ac-aluno-detalhes.php">Detalhes da AC</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Detalhes da AC</h3>
				
			</div>
			
			<ul class="fields">
				<li>
					<label for="titulo">Titulo:</label><label><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getTitulo();?>
</label>
				</li>
				<li>
					<label for="aluno">Nome do Aluno:</label><label><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getNomeAluno();?>
</label>
				</li>
				<li>
					<label for="categoria">Categoria:</label><label for="categoria"><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getNomeCategoria();?>
</label>
				</li>
				<li>
					<label for="descricao">Descrição:</label><label><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getDescricao();?>
</label>
				</li>
				<li>
					<label for="data">Data de Realização:</label><label><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getDataRealizacao();?>
</label>
				</li>
				<li>
					<label for="ch">Carga Horária:</label><label id="ch"><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getCh();?>
</label>
				</li>
				<li>
					<label for="arquivo">Anexo:</label><a href="comprovantes/<?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getNomeArquivo();?>
">Vizualizar Arquivo</a>
				</li>
				<li>
					<label for="status">Status:</label><label id="status"><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getStatus();?>
</label>
					
					
				</li>
			</ul>
		</form>
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>