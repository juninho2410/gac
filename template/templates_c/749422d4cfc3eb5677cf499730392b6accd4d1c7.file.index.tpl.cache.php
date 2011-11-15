<?php /* Smarty version Smarty 3.1.4, created on 2011-11-13 16:59:34
         compiled from ".\templates\index.tpl" */ ?>
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
  ),
  'nocache_hash' => '176104ec0032b7aac11-47596818',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec0032bc2d96',
  'variables' => 
  array (
    'id' => 0,
    'nome' => 0,
    'perfil' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec0032bc2d96')) {function content_4ec0032bc2d96($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


<div id="content">
	<div class="login">
					<p>Informe seu login e sua senha para acesso ao Sistema de Gestão de Atividades Complementares</p>
					<p><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</p>
					<p><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
					<p><?php echo $_smarty_tpl->tpl_vars['perfil']->value;?>
</p>
					<p><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</p>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>