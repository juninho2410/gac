{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="form-ac.php?action=cadastro">Cadastro de AC</a>
		</div>
		<form method="post" action="#" enctype="multipart/form-data">
			<div class="title">
				<h3 class="user">Cadastro de AC</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" maxlength="150"/>
				</li>
				<li>
					<label for="categoria">Categoria:</label>
					<select name="categoria">
						{html_options values=$id output=$nome}
					</select>
				</li>
				<li>
					<label for="descricao">Descrição:</label><textarea name="descricao" id="descricao" rows="5" cols="40"></textarea>
				</li>
				<li>
					<label for="data">Data de Realização:</label><input type="text" name="data" id="data" maxlength="10" />
				</li>
				<li>
					<label for="ch">Carga Horária:</label><input type="text" name="carga" id="ch" maxlength="2" />
				</li>
				<li>
					<label for="arquivo">Anexo:</label><input type="file" name="arquivo" id="arquivo" />
				</li>
			</ul>
		</form>
		
	
</div>

{include file="footer.tpl"}
