<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:24:01
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\consulta-usuario-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107184ec284118f7f73-39757609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa81c983309769601bcdab21a104084928e0d26' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\\consulta-usuario-aluno.tpl',
      1 => 1321294652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107184ec284118f7f73-39757609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alunos' => 0,
    'aluno' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28411aeba0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28411aeba0')) {function content_4ec28411aeba0($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-usuario.php?from=aluno">Aluno</a>
		</div>
		<div class="title">
			<h3 class="user">Aluno</h3>
			<div class="actions">
				<a href="form-usuario.php?from=aluno&action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>RA</td>
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
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value->getRa();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value->getEmail();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['aluno']->value->getCurso();?>
</td>
					<td><a href="form-usuario.php?from=aluno&action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['aluno']->value->getRa();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>