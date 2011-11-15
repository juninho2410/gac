{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=coordenador">Coordenador</a> ::
			<a href="form-usuario.php?from=coordenador&action=cadastro">Cadastro de Coordenadores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Coordenadores</h3>
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
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}