{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}
{literal}<script src='template/js/jquery.js' type='text/javascript'></script>{/literal}
{literal}<script src='template/js/validaCurso.js' type='text/javascript'></script>{/literal}
<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a> ::
			<a href="form-usuario.php?action=alteracao">Alteração de Cursos</a>
		</div>
		<form method="post" action="#">
			<div class="title">
				<h3 class="user">Cursos</h3>
				<div class="actions">
					<input type="submit" value="Salvar" />
				</div>
			</div>
			
			<ul class="fields">
				<li>
					<label for="nome">Nome:</label><input type="text" name="nome" id="nome" maxlenght="150" value="{$curso.0->getNome()}" />
				</li>
				<li>
					<label for="coordenador">Curso:</label>
					<select name="coordenador">
							{html_options values=$id selected=$curso.0->getIdCoordenador() output=$nome}
					</select>
					<input type="hidden" name="id" value="{$curso.0->getId()}" />
				</li>
			
			</ul>
		</form>
		
		
	
</div>

{include file="footer.tpl"}
