{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

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
				</li>
				<li>
					<label for="categoria">Categoria:</label><label for="categoria">{$ac.0->getNomeCategoria()}</label>
				</li>
				<li>
					<label for="descricao">Descrição:</label><label>{$ac.0->getDescricao()}</label>
				</li>
				<li>
					<label for="data">Data de Realização:</label><label>{$ac.0->getDataRealizacao()}</label>
				</li>
				<li>
					<label for="ch">Carga Horária:</label><input type="text" name="carga" id="ch" maxlength="2" value="{$ac.0->getCh()}" />
				</li>
				<li>
					<label for="comentario">Comentário:</label><textarea name="comentario">{$ac.0->getComentario()}</textarea>
				</li>
				<li>
					<label for="arquivo">Anexo:</label><a href="comprovantes/{$ac.0->getNomeArquivo()}">Vizualizar Arquivo</a>
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

{include file="footer.tpl"}
