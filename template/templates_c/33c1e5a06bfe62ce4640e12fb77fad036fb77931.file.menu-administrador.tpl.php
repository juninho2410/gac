<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 15:57:22
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\menu-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294094ec27dd2cdb7e7-07527294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c1e5a06bfe62ce4640e12fb77fad036fb77931' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac2/template/templates\\menu-administrador.tpl',
      1 => 1321320449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294094ec27dd2cdb7e7-07527294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec27dd2d2050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec27dd2d2050')) {function content_4ec27dd2d2050($_smarty_tpl) {?><div id="menu">
					<ul>
						<li>
							<a href="consulta-usuario.php?from=aluno">Aluno</a>
						</li>
						<li>
							<a href="consulta-usuario.php?from=coordenador">Coordenador</a>
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