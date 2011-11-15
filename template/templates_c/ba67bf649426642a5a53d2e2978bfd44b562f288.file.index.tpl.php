<?php /* Smarty version Smarty 3.1.4, created on 2011-11-13 22:04:03
         compiled from "template/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191714ec05af3b52d65-40174573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba67bf649426642a5a53d2e2978bfd44b562f288' => 
    array (
      0 => 'template/templates\\index.tpl',
      1 => 1321225262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191714ec05af3b52d65-40174573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec05af3cb08b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec05af3cb08b')) {function content_4ec05af3cb08b($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


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
									<span><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</span>
								</li>
								
							</ul>
						</form>
				</div>		

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>