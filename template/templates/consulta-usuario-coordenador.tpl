{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-coordenador.php">Coordenador</a>
		</div>
		<div class="title">
			<h3 class="coordenador">Coordenadores</h3>
			<div class="actions">
				<a href="form-coordenador.php?action=cadastro">Incluir</a>
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
			{if $coordenadores!=false}
			 {foreach from=$coordenadores item=coordenador}
                <tr>
					<td>{$coordenador->getId()}</td>
					<td>{$coordenador->getNome()}</td>
					<td>{$coordenador->getEmail()}</td>
					<td><a href="form-coordenador.php?action=alteracao&id={$coordenador->getId()}">Editar</a></td>                
                </tr>
                {/foreach}
			{else}
				<tr>
					<td colspan="4">Nenhum coordenador foi encontrado</td>
				</tr>
			{/if}
			</tbody>
		</table>
	
</div>
 
{include file="footer.tpl"}
