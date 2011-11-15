<?php /* Smarty version Smarty 3.1.4, created on 2011-11-15 16:24:01
         compiled from "C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\menu-administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101754ec28411b38264-26408052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff385debcb099fdcc4c354a71f56ca6aca11d61' => 
    array (
      0 => 'C:/Users/Suzane S. Soares/Desktop/xampp/htdocs/gac/template/templates\\menu-administrador.tpl',
      1 => 1321320449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101754ec28411b38264-26408052',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ec28411b7cef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec28411b7cef')) {function content_4ec28411b7cef($_smarty_tpl) {?><div id="menu">
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