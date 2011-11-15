<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 13:51:06
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62294ec05bfedc4285-00938066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f1b11ca7e07b38bb3d6dde71e793cbe7ac0ac9' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\index.tpl',
      1 => 1321368044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62294ec05bfedc4285-00938066',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec05bff00962',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec05bff00962')) {function content_4ec05bff00962($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
									<?php if ($_smarty_tpl->tpl_vars['erro']->value!=''){?>
										<span><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</span>
									<?php }?>
								</li>
								
							</ul>
						</form>
				</div>		

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>