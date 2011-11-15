{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=aluno">Aluno</a> ::
			<a href="form-usuario.php?from=aluno&action=cadastro">Cadastro de Alunos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Aluno</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" />
				</li>
				<li>
					<label for="login">Login:</label><input type="text" name="login" id="login" maxlenght="100" />
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50" />
				</li>
				<li>
					<label for="curso">Curso:</label>
					<select name="curso">
						{html_options values=$id selected=$id.0 output=$nome}
					</select>
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
