{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaCategoria.js' type='text/javascript'></script>{/literal}
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categoria</a> ::
			<a href="#">Cadastro de Categoria</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="categoria">Cadastro de Categoria</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$smarty.post.nome}"/>
				</li>
				<li>
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlength="2"value="{$smarty.post.limite_atividade}" />
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlength="2" value="{$smarty.post.limite_categoria}"/>
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
