{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="consulta-ac.php?from=coordenador">Consulta de ACs pendentes</a>
		</div>
		<div class="title">
			<h3 class="user">Consulta de Acs</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>T�tulo</td>
					<td>Status</td>
					<td>A��o</td>
				</tr>
			</thead>
			<tbody>
			 {foreach from=$acs item=ac}
                <tr>
					<td>{$ac->getId()}</td>
					<td>{$ac->getTitulo()}</td>
					<td>{$ac->getStatus()}</td>
					<td><a href="consulta-ac-detalhes.php?id={$ac->getId()}">Detalhes</a></td>                
                </tr>
                {/foreach}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
