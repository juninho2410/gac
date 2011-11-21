{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

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
					<label for="data">Data de Realização:</label><label>{$ac.0->getDataRealizacao()|date_format:"%d/%m/%Y"}</label>
				</li>
				<li>
					<label for="ch">Carga Horária:</label><label id="ch">{$ac.0->getCh()}</label>
				</li>
				<li>
					<label for="arquivo">Anexo:</label><a href="comprovantes/{$ac.0->getNomeArquivo()}">Vizualizar Arquivo</a>
				</li>
				<li>
					<label for="status">Status:</label><label id="status">{$ac.0->getStatus()}</label>
					
					
				</li>
			</ul>
		</form>
		
	
</div>

{include file="footer.tpl"}
