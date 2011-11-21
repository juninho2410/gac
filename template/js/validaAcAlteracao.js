$(document).ready(function(){
	$('form').submit(function(){
		carga=$('#ch').val();
		comentario=$('#comentario').val();
		aprovacao=$('#aprovacao option:selected').val();
		
		if(carga==""){
			alert('Preencha a carga horaria!')
			return false
		}
		else if(aprovacao=="1"){
			if(comentario==""){
				alert('Insira um comentario referente a sua reprovação.')
				return false
			}
		}
	
	
	
	})
})