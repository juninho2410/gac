{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="relatorio-aluno.php">Relat�rio</a>
		</div>
		<div class="title">
			<h3 class="user">Relat�rio</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Total de Carga Hor�ria</td>
				</tr>
			</thead>
			<tbody>
			{if $relatorios!=false}
			 {foreach from=$relatorios item=relatorio}
                <tr>
					<td>{$relatorio.Nome}</td>
					<td>{$relatorio.total}</td>
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
