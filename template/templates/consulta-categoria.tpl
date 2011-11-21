{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Categorias</a>
		</div>
		<div class="title">
			<h3 class="categoria">Categorias</h3>
			<div class="actions">
				<a href="form-categoria.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Limite por Atividade</td>
					<td>Limite por Categoria</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			{if $categorias!=false}
			 {foreach from=$categorias item=categoria}
                <tr>
					<td>{$categoria->getId()}</td>
					<td>{$categoria->getNome()}</td>
					<td>{$categoria->getLimiteAtividade()}</td>
					<td>{$categoria->getLimiteCategoria()}</td>
					<td><a href="form-categoria.php?action=alteracao&id={$categoria->getId()}">Editar</a></td>                
                </tr>
                {/foreach}
			{else}
				<tr>
					<td colspan="5">Nenhuma categoria foi encontrada</td>
				</tr>
			{/if}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
