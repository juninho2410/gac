<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 20:16:15
         compiled from "template/templates\form-ac-detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289064ec97c2f717e70-43776383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62db966f8cf7f328bc2121825075c1f265a99b53' => 
    array (
      0 => 'template/templates\\form-ac-detalhes.tpl',
      1 => 1321827370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289064ec97c2f717e70-43776383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec97c2f8b967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec97c2f8b967')) {function content_4ec97c2f8b967($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getIdAlunoRa();?>
" name="ra" />
				</li>
				<li>
					<label for="categoria">Categoria:</label><label for="categoria"><?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getNomeCategoria();?>
</label><input type="hidden" name="idCategoria" value="<?php echo $_smarty_tpl->tpl_vars['ac']->value[0]->getIdCategoria();?>
" />
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