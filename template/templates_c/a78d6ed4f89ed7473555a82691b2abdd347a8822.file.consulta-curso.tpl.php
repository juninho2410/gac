<?php /* Smarty version Smarty 3.1.4, created on 2011-11-22 19:33:16
         compiled from "template/templates\consulta-curso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122354ec943515bab95-88517467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78d6ed4f89ed7473555a82691b2abdd347a8822' => 
    array (
      0 => 'template/templates\\consulta-curso.tpl',
      1 => 1321913539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122354ec943515bab95-88517467',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec943517dae8',
  'variables' => 
  array (
    'cursos' => 0,
    'curso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec943517dae8')) {function content_4ec943517dae8($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-administrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
		<div id="breadcrumb">
			<a href="administrador.php">Administrador</a> ::
			<a href="consulta-curso.php">Cursos</a>
		</div>
		<div class="title">
			<h3 class="user">Cursos</h3>
			<div class="actions">
				<a href="form-curso.php?action=cadastro">Incluir</a>
			</div>
			</div>
		<table class="result" cellspacing="0">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nome</td>
					<td>Coordenador</td>
					<td>Ação</td>
				</tr>
			</thead>
			<tbody>
			<?php if ($_smarty_tpl->tpl_vars['cursos']->value!=false){?>
			 <?php  $_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cursos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->key => $_smarty_tpl->tpl_vars['curso']->value){
$_smarty_tpl->tpl_vars['curso']->_loop = true;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getNome();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['curso']->value->getNomeCoordenador();?>
</td>
					<td><a href="form-curso.php?action=alteracao&id=<?php echo $_smarty_tpl->tpl_vars['curso']->value->getId();?>
">Editar</a></td>                
                </tr>
                <?php } ?>
				<?php }else{ ?>
					<tr>
						<td colspan="4">Nenhum curso foi encontrado</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>