<?php

include_once('./template/includes/smarty.php');

include_once('./template/includes/sessao.php');
require('./template/includes/usuario.class.php');


$smarty->display('coordenador.tpl');

?>
