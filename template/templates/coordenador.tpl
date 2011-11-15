{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
{include file="menu-coordenador.tpl" title=foo}

<div id="content">
	<div class="login">
					<p>Informe seu login e sua senha para acesso ao Sistema de Gestão de Atividades Complementares</p>
					
					
						<form method="post" action="#">
							<ul class="loginFields">
								<li>
									<label for="login">Login:</label><input type="text" name="login" id="login"/>
								</li>
								<li>
									<label for="senha">Senha:</label><input type="password" id="senha" name="senha" />
								</li>
								<li>
									<input type="submit" value="Login" class="button" />
									<span>{$erro}</span>
								</li>
								
							</ul>
						</form>
				</div>		

</div>

{include file="footer.tpl"}
