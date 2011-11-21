{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="Aluno.php">Aluno</a> ::
			<a href="#">Consulta de Atividades Complementares</a>
		</div>
		<div class="title">
			<h3 class="atividade">Consulta de Atividades Complementares</h3>
			<div class="actions">
				<a href="form-ac.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Título</td>
					<td>Status</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			{if $acs!=false}
			 {foreach from=$acs item=ac}
                <tr>
					<td>{$ac->getId()}</td>
					<td>{$ac->getTitulo()}</td>
					<td>{$ac->getStatus()}</td>
					<td><a href="consulta-ac-aluno-detalhes.php?id={$ac->getId()}">Detalhes</a></td>                
                </tr>
                {/foreach}
			{else}
				<tr>
					<td colspan="5">Nenhuma atividade foi encontrada</td>
				</tr>
			{/if}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
