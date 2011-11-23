<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 20:14:17
         compiled from "template/templates\form-ac-aluno-detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63914ecac460a33cd3-22888875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557fea6f62acbf1eb7ae94b6f9f4823863d95bd2' => 
    array (
      0 => 'template/templates\\form-ac-aluno-detalhes.tpl',
      1 => 1321913619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63914ecac460a33cd3-22888875',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ecac460c417a',
  'variables' => 
  array (
    'ac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecac460c417a')) {function content_4ecac460c417a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/plugins\modifier.date_format.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
					<label for="data">Data de Realização:</label><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ac']->value[0]->getDataRealizacao(),"%d/%m/%Y");?>
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