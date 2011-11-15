{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=administrador">Administrador</a>
		</div>
		<div class="title">
			<h3 class="user">Administrador</h3>
			<div class="actions">
				<a href="form-usuario.php?from=administrador&action=cadastro">Incluir</a>
			</div>
		</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Email</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			 {foreach from=$administradores item=administrador}
                <tr>
					<td>{$administrador->getId()}</td>
					<td>{$administrador->getNome()}</td>
					<td>{$administrador->getEmail()}</td>
					<td><a href="form-usuario.php?from=administrador&action=alteracao&id={$administrador->getId()}">Editar</a></td>                
                </tr>
                {/foreach}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
