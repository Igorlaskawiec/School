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
	function tablica($x, $y)
			{
				$i = 1;
				$j = 1;
				echo "<table border>";
				while($i <= $x)
				{
					echo "<tr>";
					do
					{
						$style = '';
						if(($i == 1) || ($j == 1))
						{
							$style = 'style="background-color:red;"';
						}
						echo "<td $style>".$i * $j."</td>";
						$j++;
					}
					while ($j <= $y);
					echo "</tr>";
					$i++;
					$j = 1;
				}
				echo "</table>";
			}
			$x = $_POST["x"] ?? null ? $_POST["x"]:0;
			$y = $_POST["y"]?? null ? $_POST["y"]:0;
			
			if($x <= 0 || $y <= 0)
				echo "<h3>Podaj wielkości większe od zera</h3>";
			else
			{
				echo "<br>Tabliczka $x x $y";

			}
	
?>