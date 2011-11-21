$(document).ready(function(){
	$('form').submit(function(){
		nome=$('#nome').val();
		email=$('#email').val();
		senha=$('#senha').val();
		
		if(nome=="" || email =="" || senha ==""){
			alert('Preencha todos os campos!')
			return false
		}
		else if(!validateEmail(email)){
			alert('Email inválido, digite um email válido.')
			return false
		}
	
	
	
	})
})