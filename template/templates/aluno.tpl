{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-aluno.tpl" title=foo}

<div id="content">
	<p>Bem vindo  </p>
</div>
<h1>
{$teste}</h1>
{include file="footer.tpl"}
