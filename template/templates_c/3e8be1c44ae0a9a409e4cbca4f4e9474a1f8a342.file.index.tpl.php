<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:35:00
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73234ec2783981de90-47981966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e8be1c44ae0a9a409e4cbca4f4e9474a1f8a342' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\\index.tpl',
      1 => 1321368044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73234ec2783981de90-47981966',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec2783995140',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec2783995140')) {function content_4ec2783995140($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<div class="login">
					<p>Informe seu login e sua senha para acesso ao Sistema de Gest�o de Atividades Complementares</p>
					
					
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