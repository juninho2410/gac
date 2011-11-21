<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 20:14:01
         compiled from "template/templates\menu-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28454ec94e6001eaf0-18614718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff0c095ad6d250ea00542fb0f3c0555a0db18c3' => 
    array (
      0 => 'template/templates\\menu-aluno.tpl',
      1 => 1321913573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28454ec94e6001eaf0-18614718',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec94e6003fa3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec94e6003fa3')) {function content_4ec94e6003fa3($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="aluno.php">Início</a>
						</li>
						<li>
							<a href="form-ac.php?action=cadastro">Cadastrar Atividade</a>
						</li>					
						<li>
							<a href="consulta-ac.php?from=aluno">Consulta AC</a>
						</li>
						<li class="last">
							<a href="relatorio-aluno.php">Relatório Atividade</a>
						</li>
						
							
						
					</ul>
					<a class="logout" href="logout.php">Sair</a>
				</div>
<?php }} ?>