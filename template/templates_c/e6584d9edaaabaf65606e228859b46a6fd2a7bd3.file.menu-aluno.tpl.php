<?php /* Smarty version Smarty 3.1.4, created on 2011-11-16 21:32:31
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\menu-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101584ec28a5a93b808-72879192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6584d9edaaabaf65606e228859b46a6fd2a7bd3' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\menu-aluno.tpl',
      1 => 1321486347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101584ec28a5a93b808-72879192',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28a5a99876',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28a5a99876')) {function content_4ec28a5a99876($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="aluno.php?from=aluno">Início</a>
						</li>
						<li>
							<a href="form-ac.php?action=cadastro">Cadastrar Atividade</a>
						</li>					
						<li>
							<a href="consulta-ac.php?from=aluno">Consulta AC</a>
						</li>
						<li>
							<a href="relatorio-aluno.php?tipo=atividade">Relatório Atividade</a>
						</li>
						<li class="last">
							<a href="relatorio-aluno.php?tipo=carga">Relatório CH</a>
						</li>					
					</ul>
				</div>
<?php }} ?>