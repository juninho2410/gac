{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
	<p>Caro (a) {$smarty.session.nome}:</p>
	<p>Nesta �rea voc� poder� acompanhar a evolu��o de seus registros e consultar o seu desempenho, na pr�pria p�gina ou atrav�s de relat�rios espec�ficos.</p>
	<p>Voc� dever� lan�ar atividades complementares de no m�nimo <strong>tr�s categorias diferentes</strong>, sempre respeitando os limites por categoria e/ou por atividade.</p>
	
</div>
<h1>
{$teste}</h1>
{include file="footer.tpl"}
