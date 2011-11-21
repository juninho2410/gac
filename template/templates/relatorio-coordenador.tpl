{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="relatorio-coordenador.php">Relatório</a>
		</div>
		<div class="title">
			<h3 class="relatorio">Relatório de Categorias Solicitadas</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Porcentagem</td>
				</tr>
			</thead>
			<tbody>
			{if $relatorios!=false}
			 {foreach from=$relatorios item=relatorio}
                <tr>
					<td>{$relatorio.Nome}</td>
					<td>{(($relatorio.total/$total)*100)|string_format:"%.2f"}%</td>
                </tr>
                {/foreach}
			{else}
				<tr>
					<td colspan="2">Nenhuma atividade foi aprovada para gerar dados.</td>
				</tr>
			{/if}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
