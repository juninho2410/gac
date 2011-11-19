<?php /* Smarty version Smarty 3.1.4, created on 2011-11-18 21:26:27
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\form-ac-detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277684ec6d8e3ee27a4-29768392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95853e8262c9329a6626896d5d105ba215605d66' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\form-ac-detalhes.tpl',
      1 => 1321658785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277684ec6d8e3ee27a4-29768392',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec6d8e43467e',
  'variables' => 
  array (
    'ac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec6d8e43467e')) {function content_4ec6d8e43467e($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="consulta-ac-coordenador.php">Consulta de ACs pendentes</a> ::
			<a href="consulta-ac-detalhes.php">Detalhes da AC</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Detalhes da AC</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
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
					<label for="ch">Carga Horária:</label><input type="text" name="carga" id="ch" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getCh();?>
" />
				</li>
				<li>
					<label for="comentario">Comentário:</label><textarea name="comentario"><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getComentario();?>
</textarea>
				</li>
				<li>
					<label for="arquivo">Anexo:</label><a href="comprovantes/<?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getNomeArquivo();?>
">Vizualizar Arquivo</a>
				</li>
				<li>
					<label for="aprovacao">Aprovação:</label>
					<select name="aprovacao">
						<option value="0">Aprovado</option>
						<option value="1">Reprovado</option>
					</select>
					
				</li>
			</ul>
		</form>
		
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>