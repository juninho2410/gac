{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-administrador.tpl" title=foo}

<div id="content">
	<p>Bem vindo {$smarty.session.nome} </p>
</div>

{include file="footer.tpl"}
