<?php /* Smarty version Smarty 3.1.4, created on 2011-11-19 11:11:59
         compiled from "C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\menu-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185734ec060d1edc654-36472269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ae9854d33005b127258d4b2edc533222d38aa8' => 
    array (
      0 => 'C:/Users/Junior/Desktop/Xampp/xampplite/htdocs/gac/template/templates\\menu-administrador.tpl',
      1 => 1321708306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185734ec060d1edc654-36472269',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec060d20252d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec060d20252d')) {function content_4ec060d20252d($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="consulta-aluno.php">Aluno</a>
						</li>
						<li>
							<a href="consulta-coordenador.php">Coordenador</a>
						</li>
						<li>
							<a href="consulta-administrador.php">Administrador</a>
								
						</li>
						<li>
							<a href="consulta-curso.php">Cursos</a>
						</li>					
						<li class="last">
							<a href="consulta-categoria.php">Categorias</a> <!-- Qual o motivo da classe aqui???-->
							
						</li>					
					</ul>
				</div>
<?php }} ?>