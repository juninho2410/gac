{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
	<p>Caro (a) {$smarty.session.nome}: </p>
	<p>A partir desta �rea, voc� poder� receber todas as atividades complementares dos alunos matriculados nos cursos que estiverem sob a sua gest�o.</p>
<p>	Nessa p�gina ser� poss�vel visualizar os status das solicita��es, fazer a aprova��o ou reprova��o e acompanhar o desempenho dos alunos, atrav�s de relat�rios. </p>
	
</div>

{include file="footer.tpl"}
