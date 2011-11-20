<?php /* Smarty version Smarty 3.1.4, created on 2011-11-20 16:13:24
         compiled from "template/templates\menu-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50064ec938362f5667-31587445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406d6642165f5e2c170929dda36ae2951b84edec' => 
    array (
      0 => 'template/templates\\menu-administrador.tpl',
      1 => 1321812748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50064ec938362f5667-31587445',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec9383632819',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec9383632819')) {function content_4ec9383632819($_smarty_tpl) {?><div id="menu">
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