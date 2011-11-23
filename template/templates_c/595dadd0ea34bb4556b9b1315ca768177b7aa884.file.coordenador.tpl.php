<?php /* Smarty version Smarty 3.1.4, created on 2011-11-22 20:08:51
         compiled from "template/templates\coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167864ec97b9da651b2-27902261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595dadd0ea34bb4556b9b1315ca768177b7aa884' => 
    array (
      0 => 'template/templates\\coordenador.tpl',
      1 => 1321999366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167864ec97b9da651b2-27902261',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec97b9dba39e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec97b9dba39e')) {function content_4ec97b9dba39e($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu-coordenador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div id="content">
	<p>Caro (a) <?php echo $_SESSION['nome'];?>
: </p>
	<p>A partir desta área, você poderá receber todas as atividades complementares dos alunos matriculados nos cursos que estiverem sob a sua gestão.</p>
<p>	Nessa página será possível visualizar os status das solicitações, fazer a aprovação ou reprovação e acompanhar o desempenho dos alunos, através de relatórios. </p>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>