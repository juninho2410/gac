{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
	<p>Caro (a) {$smarty.session.nome}: </p>
	<p>Voc� poder� cadastrar os <strong>Administradores</strong>, <strong>Coordenadores</strong> e <strong>Alunos</strong>, al�m dos <strong>Cursos</strong> e <strong>Categorias</strong>.</p><p> Para isso, atrav�s dos links acima, voc� chegar� �s p�ginas correspondentes para a efetiva��o dos devidos cadastros. </p>
	<p>Voc� dever� iniciar os cadastros pelos <strong>coordenadores</strong>, depois os <strong>cursos</strong> que eles coordenam.</p>
	<p>Ap�s isso cadastre os <strong>alunos</strong> e o curso relacionado a ele.</p>
	<p>Para finalizar, cadastre as <strong>categorias</strong> de atividades complementares.</p>
</div>

{include file="footer.tpl"}
