{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
	<p>Caro (a) {$smarty.session.nome}:</p>
	<p>Nesta área você poderá acompanhar a evolução de seus registros e consultar o seu desempenho, na própria página ou através de relatórios específicos.</p>
	<p>Você deverá lançar atividades complementares de no mínimo <strong>três categorias diferentes</strong>, sempre respeitando os limites por categoria e/ou por atividade.</p>
	
</div>
<h1>
{$teste}</h1>
{include file="footer.tpl"}
