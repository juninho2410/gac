	function validateEmail($email) {
	    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	    if( !emailReg.test( $email ) ) {
	        return false;
	    } else {
	        return true;
	    }
	}
	function formataData(campo, evt) {
		var xPos = PosicaoCursor(campo);
		//dd/MM/yyyy
		evt = getEvent(evt);

		var tecla = getKeyCode(evt);
		if (!teclaValida(tecla))
			return;
		vr = campo.value = filtraNumeros(filtraCampo(campo));
		tam = vr.length;

		if (tam >= 2 && tam < 4)
			campo.value = vr.substr(0, 2) + '/' + vr.substr(2);
		if (tam == 4)
			campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/';
		if (tam > 4)
			campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4);

		MovimentaCursor(campo, xPos);
	}
	function validaExtensoes(arquivo){
		retorno=false
		extensoesPermitidas=new Array()
		extensoesPermitidas[0]="pdf";
		extensoesPermitidas[1]="png";
		extensoesPermitidas[2]="jpg";
		extensoesPermitidas[3]="gif";
		
		extensaoArquivo=arquivo.split('.')
		extensaoArquivo=extensaoArquivo[1]
		$.each(extensoesPermitidas,function(i,value){
			if(value==extensaoArquivo){
				retorno=true;
				return false
			}
		})
		return retorno
		
	
	}