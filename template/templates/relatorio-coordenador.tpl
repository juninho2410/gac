{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="relatorio-coordenador.php">Relatório</a>
		</div>
		<div class="title">
			<h3 class="user">Relatório de Categorias Solicitadas</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Porcentagem</td>
				</tr>
			</thead>
			<tbody>
			 {foreach from=$relatorios item=relatorio}
                <tr>
					<td>{$relatorio.Nome}</td>
					<td>{(($relatorio.total/$total)*100)|string_format:"%.2f"}%</td>
                </tr>
                {/foreach}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
