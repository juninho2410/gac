{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/functions.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaUsuario.js' type='text/javascript'></script>{/literal}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a> ::
			<a href="#">Cadastro de Aluno</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="aluno">Cadastro de Aluno</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$smarty.post.nome}"/>
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="{$smarty.post.email}" />
				</li>
				<li>
					<label for="login">Login:</label><input type="text" name="login" id="login" maxlenght="100" value="{$smarty.post.login}" />
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50" value="{$smarty.post.senha}"/>
				</li>
				<li>
					<label for="curso">Curso:</label>
					<select name="curso">
					{if $smarty.post.curso==""}
						{html_options values=$id selected=$id.0 output=$nome}
					{else}
						{html_options values=$id selected=$smarty.post.curso output=$nome}
					{/if}
					</select>
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
