<?php /* Smarty version Smarty 3.1.4, created on 2011-11-13 23:41:11
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\consulta-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162124ec062e6a40ba7-47501751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c367c84e2b6f63e5b1d6a2036465da8970f58b' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\consulta-aluno.tpl',
      1 => 1321234865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162124ec062e6a40ba7-47501751',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec062e6bdb26',
  'variables' => 
  array (
    'alunos' => 0,
    'aluno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec062e6bdb26')) {function content_4ec062e6bdb26($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-aluno.php">Aluno</a>
		</div>
		<div class="title">
			<h3 class="user">Aluno</h3>
			<div class="actions">
				<a href="form-aluno.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Email</td>
					<td>Curso</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			 <?php  $_smarty_tpl->tpl_vars['aluno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aluno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alunos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aluno']->key => $_smarty_tpl->tpl_vars['aluno']->value){
$_smarty_tpl->tpl_vars['aluno']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value[0];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value[1];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value[2];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value[3];?>
</td>
					<td><a href="form-aluno.php?action=cadastro&id=<?php echo $_smarty_tpl->tpl_vars['aluno']->value[0];?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>