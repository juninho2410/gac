<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 20:16:48
         compiled from "template/templates\menu-coordenador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59874ec97b9dc2c7c4-70344689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644428e224c191f2616045599744fbf6610e78af' => 
    array (
      0 => 'template/templates\\menu-coordenador.tpl',
      1 => 1321913568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59874ec97b9dc2c7c4-70344689',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec97b9dc4832',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec97b9dc4832')) {function content_4ec97b9dc4832($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="coordenador.php">Início</a>
						</li>			
						<li>
							<a href="consulta-ac-coordenador.php">Consulta AC</a>
						</li>
						<li class="last">
							<a href="relatorio-coordenador.php">Relatório Atividade</a>
						</li>				
					</ul>
					<a class="logout" href="logout.php">Sair</a>
				</div>
<?php }} ?>