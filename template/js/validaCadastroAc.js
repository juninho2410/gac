$(document).ready(function(){
	$('form').submit(function(){
		titulo=$('#titulo').val();
		data=$('#data').val();
		carga=$('#ch').val();
		arquivo=$('#arquivo').val();
		
		if(titulo=="" || data=="" || carga=="" || arquivo ==""){
			alert('Preencha todos os campos!')
			return false
		}
		else if(!validaExtensoes(arquivo)){
			alert('Extensão não permitida.')
			return false
		}
	
	
	
	})
})