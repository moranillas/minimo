<?php
		// Son todos negativos?
		function minimo($a){

				//$a = [1,200,23,1000];
				$min=$a[0];
				for($i=1;$i<count($a);$i++){
								if($a[$i]<$min)
									$min=$a[$i];
				}

				return $min;

	    }
?>
