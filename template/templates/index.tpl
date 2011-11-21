{config_load file="test.conf" section="setup"}
{include file="header-index.tpl" title=foo}

<div id="content" class="bgLogin">
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
									{if $erro!=""}
										<span>{$erro}</span>
									{/if}
								</li>
								
							</ul>
						</form>
				</div>		

</div>

{include file="footer.tpl"}
