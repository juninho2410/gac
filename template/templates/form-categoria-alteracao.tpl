{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaCategoria.js' type='text/javascript'></script>{/literal}
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categorias</a> ::
			<a href="#">Alteração de Categoria</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="categoria">Alteração de Categoria</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$categoria.0->getNome()}" />
				</li>
				<li>
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlenght="2" value="{$categoria.0->getLimiteAtividade()}"/>
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlenght="2" value="{$categoria.0->getLimiteCategoria()}"/>
				</li>
				<li>
					<input type="hidden" name="id" value="{$categoria.0->getId()}" />
				</li>
			
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
