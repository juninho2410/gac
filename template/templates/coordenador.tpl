{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
	<p>Caro (a) {$smarty.session.nome}: </p>
	<p>A partir desta área, você poderá receber todas as atividades complementares dos alunos matriculados nos cursos que estiverem sob a sua gestão.</p>
<p>	Nessa página será possível visualizar os status das solicitações, fazer a aprovação ou reprovação e acompanhar o desempenho dos alunos, através de relatórios. </p>
	
</div>

{include file="footer.tpl"}
