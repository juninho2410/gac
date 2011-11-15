<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 13:50:50
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\menu-aluno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101584ec28a5a93b808-72879192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6584d9edaaabaf65606e228859b46a6fd2a7bd3' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\menu-aluno.tpl',
      1 => 1321372218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101584ec28a5a93b808-72879192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28a5a99876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28a5a99876')) {function content_4ec28a5a99876($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="consulta-usuario.php?from=aluno">Consulta</a>
						</li>
						<li>
							<a href="consulta-usuario.php?from=coordenador">Nova AC</a>
						</li>
						<li>
							<a href="consulta-usuario.php?from=administrador">Administrador</a>
								
						</li>
						<li>
							<a href="consulta-curso.php">Cursos</a>
						</li>					
						<li class="last">
							<a href="#">Categorias</a> <!-- Qual o motivo da classe aqui???-->
							
						</li>					
					</ul>
				</div>
<?php }} ?>