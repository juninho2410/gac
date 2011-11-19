<?php /* Smarty version Smarty 3.1.4, created on 2011-11-18 21:23:51
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\consulta-ac-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314454ec6ca70e4ce31-16188258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9735dd167fd2cc4f4ea0d42d5031758eae4716af' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\consulta-ac-coordenador.tpl',
      1 => 1321658628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314454ec6ca70e4ce31-16188258',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec6ca713f6a6',
  'variables' => 
  array (
    'acs' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec6ca713f6a6')) {function content_4ec6ca713f6a6($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="coordenador.php">Coordenador</a> ::
			<a href="consulta-ac.php?from=coordenador">Consulta de ACs pendentes</a>
		</div>
		<div class="title">
			<h3 class="user">Consulta de Acs</h3>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Título</td>
					<td>Status</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			 <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getTitulo();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ac']->value->getStatus();?>
</td>
					<td><a href="consulta-ac-detalhes.php?id=<?php echo $_smarty_tpl->tpl_vars['ac']->value->getId();?>
">Detalhes</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>