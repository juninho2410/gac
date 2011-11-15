{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-categoria.php">Categoria</a> ::
			<a href="form-categoria.php?action=cadastro">Cadastro de Categorias</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Categorias</h3>
				<div class="actions">
					<input type="submit" value="Incluir" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150"/>
				</li>
				<li>
					<label for="limiteatividade">Limite por atividade:</label><input type="text" name="limite_atividade" id="limiteatividade" maxlenght="2"/>
				</li>
				<li>
					<label for="limitecategoria">Limite por categoria:</label><input type="text" name="limite_categoria" id="limitecategoria" maxlenght="2"/>
				</li>
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}