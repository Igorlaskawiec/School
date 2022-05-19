<?php
	function ciagArytmetyczny($A1,$R,$N){
		echo "Ciąg arytmetyczny zawiera wyrazy: ";
		for($i=0;$i<$N;$i++){
		echo $A1.", ";
		$A1+=$R;
		}
	}	
	function ciagFibonacciego($N)
	{
		echo "Ciąg Fibonacciego zawiera wyrazy: ";
		if($N==1) echo "1";
		elseif($N>=2)
		{
			echo "1, 1, ";
			$x = 1; 
			$y = 1;
			for($i=2;$i<$N;$i++)
			{
				$buf=$y;
				$y+=$x;
				$x=$buf;
				echo $y.', ';
			}
		}
	}
	function ciagGeometryczny($A1,$I,$N)
	{
		echo "Ciąg geometryczny zawiera wyrazy: ";
		for($i=0;$i<$N;$i++){
		echo $A1.", ";
		$A1*=$I;
		}
	}		
?>