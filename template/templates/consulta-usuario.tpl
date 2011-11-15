{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a>
		</div>
		<div class="title">
			<h3 class="user">Aluno</h3>
			<div class="actions">
				<a href="form-usuario.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Email</td>
					<td>Curso</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			 {foreach from=$alunos item=aluno}
                <tr>
					<td>{$aluno.0}</td>
					<td>{$aluno.1}</td>
					<td>{$aluno.2}</td>
					<td>{$aluno.3}</td>
					<td><a href="form-usuario.php?action=alteracao&id={$aluno.0}">Editar</a></td>                
                </tr>
                {/foreach}
			</tbody>
		</table>
	
</div>

{include file="footer.tpl"}
