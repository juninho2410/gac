{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a>
		</div>
		<div class="title">
			<h3 class="aluno">Aluno</h3>
			<div class="actions">
				<a href="form-aluno.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>RA</td>
					<td>Nome</td>
					<td>Email</td>
					<td>Curso</td>
					<td>A��o</td>
				</tr>
			</thead>
			<tbody>
			{if $alunos!=false}
			 {foreach from=$alunos item=aluno}
                <tr>
					<td>{$aluno->getRa()}</td>
					<td>{$aluno->getNome()}</td>
					<td>{$aluno->getEmail()}</td>
					<td>{$aluno->getCurso()}</td>
					<td><a href="form-aluno.php?action=alteracao&id={$aluno->getRa()}">Editar</a></td>                
                </tr>
                {/foreach}
			{else}
				<tr>
					<td colspan="5">Nenhum aluno foi encontrado</td>
				</tr>
			{/if}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
