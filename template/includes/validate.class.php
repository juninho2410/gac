<?php 
	class validate{
		public function __construct(){
		}
		
		
		public function email($mail){
			if(preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $mail)) {
				return true;
			}else{
				return false;
			}
		}
		public function cnpj($cnpj)
		{
			$cnpj = str_pad(ereg_replace('[^0-9]', '', $cnpj), 14, '0', STR_PAD_LEFT);

			if (strlen($cnpj) != 14) {
				return false;
			} else {
				for ($t = 12; $t < 14; $t++) {
					for ($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++) {
						$d += $cnpj{$c} * $p;
						$p   = ($p < 3) ? 9 : --$p;
					}

					$d = ((10 * $d) % 11) % 10;

					if ($cnpj{$c} != $d) {
						return false;
					}
				}

				return true;
			}
		}		
	}	
?>