{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="aluno.php">Aluno</a> ::
			<a href="relatorio-aluno.php">Relatório</a>
		</div>
		<div class="title">
			<h3 class="user">Relatório</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Categoria</td>
					<td>Total de Carga Horária</td>
				</tr>
			</thead>
			<tbody>
			 {foreach from=$relatorios item=relatorio}
                <tr>
					<td>{$relatorio.Nome}</td>
					<td>{$relatorio.total}</td>
                </tr>
                {/foreach}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
