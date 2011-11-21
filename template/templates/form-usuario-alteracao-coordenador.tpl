{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/functions.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaUsuarioAlteracao.js' type='text/javascript'></script>{/literal}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-coordenador.php">Coordenador</a> ::
			<a href="#">Alteração de Coordenador</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="coordenador">Alteração de Coordenador</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$coordenador.0->getNome()}" />
				</li>
				<li>
					<label for="email">Email:</label><input type="text" name="email" id="email" maxlenght="150" value="{$coordenador.0->getEmail()}"/>
				</li>
				<li>
					<label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlenght="50"  value="{$coordenador.0->getSenha()}"/>
					<input type="hidden" name="id" value="{$coordenador.0->getIdUsuario()}" />
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
