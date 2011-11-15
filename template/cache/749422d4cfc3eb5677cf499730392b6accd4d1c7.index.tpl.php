<?php /*%%SmartyHeaderCode:176104ec0032b7aac11-47596818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1321210766,
      2 => 'file',
    ),
    '0debd65d8a9db561a3ba3fd862046bf4e41cc1db' => 
    array (
      0 => '.\\configs\\test.conf',
      1 => 1319066470,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1321206712,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1321206754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176104ec0032b7aac11-47596818',
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec01866370a7',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec01866370a7')) {function content_4ec01866370a7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>	</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<div id="container">
			<div id="main">
				<div id= "header">
					<div id="logo"></div>
					<h1> Faculdade Impacta </h1>
					<h2> GAC - Gestão de Atividades Complementares </h2>
					
				</div>

<div id="content">
	<div class="login">
					<p>Informe seu login e sua senha para acesso ao Sistema de Gestão de Atividades Complementares</p>
					<p></p>
					<p></p>
					<p></p>
					<p>Login ou senha Incorretos</p>
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
								</li>
								
							</ul>
						</form>
				</div>		

</div>

				<div id= "footer">
					<p> Desenvolvido pelo Loren Ipsun</p>
				</div>
			</div>		
		</div>
	</body>
</html>
<?php }} ?>