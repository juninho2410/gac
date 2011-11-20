$(document).ready(function(){
	$('form').submit(function(){
		nome=$('#nome').val();
		if(nome==""){
			alert('Preencha o nome do curso')
			return false
		}
	})
})