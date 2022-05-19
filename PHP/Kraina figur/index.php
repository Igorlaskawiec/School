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
 <!--
<div id='formularz'>
<form method='post'>
	<fieldset>
	  <legend>Wybierz figure</legend>
	  <div>
	    <input type="checkbox" id="trojkat" value="trojkat">
	    <label for="coding">Trójkąt</label>
	  </div>
	  <div>
	    <input type="checkbox" id="prostokat" value="prostokat">
	    <label for="music">Prostokąt</label>
	  </div>
	  <div>
	    <input type="checkbox" id="trapez" value="trapez">
	    <label for="music">Trapez</label>
	  </div>
	  <div>
	    <input type="checkbox" id="kolo" value="kolo">
	    <label for="music">Koło</label>
	  </div>
	  
	</fieldset>

</form>
</div> -->


<div id="formularz2">

<div class="trojkat">
	<h3>Trójkąt</h3>
	Podaj wymiary trójkąta:
	<form method='post' action="tabela.php">
			<label>Podstawa:</label>
			<input type='number' id='PodsTroj' name='PodsTroj'>
			<br>
			<label>Wysokość:</label>
			<input type='number' id='WysTroj' name='WysTroj'>
			<br>
			
	

	<h3>Prostokąt</h3>
	Podaj wymiary prostokąta:
	<br>

			<label>Bok A:</label>
			<input type='number' id='ProsA' name='ProsA'>
			<br>
			<label>Bok B:</label>
			<input type='number' id='ProsB' name='ProsB'>
			<br>
			


	<h3>Trojkat</h3>
	Podaj wymiary trapezu:
	<br>
			<label>Podstawa A:</label>
			<input type='number' id='TrapezA' name='TrapezA'>
			<br>
			<label>Podstawa B:</label>
			<input type='number' id='TrapezB' name='TrapezB'>
			<br>
			<label>Wysokość:</label>
			<input type='number' id='WysTrapez' name='WysTrapez'>
			<br>
			
</div>

	<h3>Koło</h3>
	Podaj promień koła:
			<label>Promien:</label>
			<input type='number' id='promien' name='promien'>
			<br>
			<input type='submit' value='Oblicz' name='Oblicz'>
		</form>
<br>
<br>

<?php
			if(isset($_POST['Oblicz']))
			{

				function prostokat($A,$B){
			echo "Pole prostokata wynosi:";
				echo $A*$B;

			}
			function tabela(){
			echo "<table>";

			}

				//require 'funkcje.php';
				$PodstTroj = $_POST['PodsTroj'];
				$WysoTroj = $_POST['WysTroj'];
				$ProstA = $_POST['ProsA'];
				$ProstB = $_POST['ProsB'];
				
				tabela();
				prostokat($ProstA, $ProstB);
			
			}		
		?>

</div>




<footer>
	<center><h3>Igor Łaskawiec</h3></center>
</footer>



</body>
</html>