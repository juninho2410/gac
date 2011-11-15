{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a> ::
			<a href="form-curso.php?action=cadastro">Cadastro de Cursos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Cursos</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="coordenador">Coordenador:</label>
					<select name="coordenador">
						{html_options values=$id selected=$id.0 output=$nome}
					</select>
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
