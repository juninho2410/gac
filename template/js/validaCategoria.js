$(document).ready(function(){
	$('form').submit(function(){
		nome=$('#nome').val();
		limiteAtividade=$('#limiteatividade').val();
		limiteCategoria=$('#limitecategoria').val();
		if(nome=="" || limiteCategoria==""){
			alert('Preencha o nome da categoria e o limite da categoria')
			
			return false
		}
		else if(limiteAtividade > limiteCategoria){
			alert('O limite da atividade não pode ser maior que o limite da Categoria!')
			return false
		}
	})
})