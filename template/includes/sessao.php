<?php
	session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['perfil'])) {
		
		
		
	}
	else{
	session_destroy();
	}


?>