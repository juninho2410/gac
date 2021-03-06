{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaAcAlteracao.js' type='text/javascript'></script>{/literal}

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
					<label for="titulo">Titulo:</label><label>{$ac.0->getTitulo()}</label>
				</li>
				<li>
					<label for="aluno">Nome do Aluno:</label><label>{$ac.0->getNomeAluno()}</label>
					<input type="hidden" value="{$ac.0->getIdAlunoRa()}" name="ra" />
				</li>
				<li>
					<label for="categoria">Categoria:</label><label for="categoria">{$ac.0->getNomeCategoria()}</label><input type="hidden" name="idCategoria" value="{$ac.0->getIdCategoria()}" />
				</li>
				<li>
					<label for="descricao">Descri��o:</label><label>{$ac.0->getDescricao()}</label>
				</li>
				<li>
					<label for="data">Data de Realiza��o:</label><label>{$ac.0->getDataRealizacao()|date_format:"%d/%m/%Y"}</label>
				</li>
				<li>
					<label for="ch">Carga Hor�ria:</label><input type="text" name="carga" id="ch" maxlength="2" value="{$ac.0->getCh()}" />
				</li>
				<li>
					<label for="comentario">Coment�rio:</label><textarea name="comentario" id="comentario">{$ac.0->getComentario()}</textarea>
				</li>
				<li>
					<label for="arquivo">Anexo:</label><a href="comprovantes/{$ac.0->getNomeArquivo()}">Vizualizar Arquivo</a>
				</li>
				<li>
					<label for="aprovacao">Aprova��o:</label>
					<select name="aprovacao" id="aprovacao">
						<option value="0">Aprovado</option>
						<option value="1">Reprovado</option>
					</select>
					
				</li>
			</ul>
		</form>
		
	
</div>

{include file="footer.tpl"}
