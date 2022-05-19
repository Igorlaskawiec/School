<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kraina figur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Kraina figur</h1>
		<i><h4 id="cytaty">
<?php

	$element[]='"Matematyka kosmosu wręcz żąda istnienia innych form życia."';
	$element[]='"Jeśli matematyka jest królową nauk, to królową matematyki jest teoria liczb."';
	$element[]='"Matematyka jest drzwiami i kluczem do nauki."';
	$element[]='"Matematyka jest miarą wszystkiego."';
	$element[]='"W matematyce raz udowodnione twierdzenie na zawsze zachowuje swoją prawdziwość."';
	print $element[array_rand($element, 1)];
?>
		</h4></i>
	</header>

	<?php
			if(isset($_POST['Oblicz']))
			{
				require 'funkcje.php';
				$PodstTroj = $_POST['PodsTroj'];
				$WysoTroj = $_POST['WysTroj'];
				$ProstA = $_POST['ProsA'];
				$ProstB = $_POST['ProsB'];

				function prostokat($A,$B){
			echo "Pole prostokata wynosi:";
				echo $A*$B;

			}
			function tabela(){
			echo "<table>";
			echo "<tr><td>Nazwa figury</td><td>Rysunek</td><td>Przykładowe pole</td></tr>";
			echo "<tr>prostokat($ProstA, $ProstB)</tr>";
			echo "</table>";

			}

				//require 'funkcje.php';
				
				
				tabela();
				//prostokat($ProstA, $ProstB);
			
			}		
		?>
<footer>
	<center><h3>Igor Łaskawiec</h3></center>
</footer>



</body>
</html>