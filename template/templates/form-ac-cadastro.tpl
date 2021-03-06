{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/formatadores.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/functions.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaCadastroAc.js' type='text/javascript'></script>{/literal}

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
					<label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" maxlength="150" value="{$smarty.post.titulo}"/>
				</li>
				<li>
					<label for="categoria">Categoria:</label>
					<select name="categoria">
						{html_options values=$id output=$nome}
					</select>
				</li>
				<li>
					<label for="descricao">Descri��o:</label><textarea name="descricao" id="descricao" rows="5" cols="40">{$smarty.post.descricao}</textarea>
				</li>
				<li>
					<label for="data">Data de Realiza��o:</label><input type="text" name="data" id="data" maxlength="10" value="{$smarty.post.data}" onkeyup="formataData(this,event);"/>
				</li>
				<li>
					<label for="ch">Carga Hor�ria:</label><input type="text" name="carga" id="ch" maxlength="2" value="{$smarty.post.carga}" />
				</li>
				<li>
					<label for="arquivo">Anexo:</label><input type="file" name="arquivo" id="arquivo" value="" />
				</li>
			</ul>
		</form>
		
	
</div>

{include file="footer.tpl"}
