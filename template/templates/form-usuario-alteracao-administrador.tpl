{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=administrador">Administrador</a> ::
			<a href="form-usuario.php?from=administrador&action=alteracao">Alteração de Administradores</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Administrador</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$administrador.0->getNome()}" />
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="{$administrador.0->getEmail()}"/>
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"  value="{$administrador.0->getSenha()}"/>
					<input type="hidden" name="id" value="{$administrador.0->getIdUsuario()}" />
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
