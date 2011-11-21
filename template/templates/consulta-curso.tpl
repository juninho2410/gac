{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a>
		</div>
		<div class="title">
			<h3 class="user">Cursos</h3>
			<div class="actions">
				<a href="form-curso.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Coordenador</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			{if $cursos!=false}
			 {foreach from=$cursos item=curso}
                <tr>
					<td>{$curso->getId()}</td>
					<td>{$curso->getNome()}</td>
					<td>{$curso->getNomeCoordenador()}</td>
					<td><a href="form-curso.php?action=alteracao&id={$curso->getId()}">Editar</a></td>                
                </tr>
                {/foreach}
				{else}
					<tr>
						<td colspan="4">Nenhum curso foi encontrado</td>
					</tr>
				{/if}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
