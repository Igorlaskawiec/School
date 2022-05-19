<!DOCTYPE html>
<html lang='pl'>
	
<head>
	<meta charset='utf-8'>
	<title>Ciągi liczbowe</title>
	<link rel="stylesheet" href="styl2.css">
</head>

<body>

	<div class='baner' id='pierwszy'>
		<h2>Poznaj Ciągi Liczbowe</h2>
	</div>
	</div>
	<div class='baner'>
		<a href='liczby.php'><h5>Ciągi arytmetyczne</h5></a>
	</div>
	<div class='baner'>
		<a href='fib.php'><h5>Ciąg Fibonacciego</h5></a>
	</div>
	<div class='baner'>
		<img src='obraz1.png' alt='Fibonacci'>
	</div>
	<div style='break: both;'></div>
	
	
	<div id='lewy'>
		<ol>
			<li><a href='liczby.php'>ciągi arytmetyczne</a></li>
			<li><a href='geo.php'>ciągi geometryczne</a></li>
			<li><a href='fib.php'>ciąg Fibonacciego</a></li>
			<li><a href='tabliczka.php'>tabliczka mnożenia</a></li>
		</ol>
	</div>


	<div id='prawy' style="background-image: url('obraz2.jpg'); background-repeat: no-repeat;">
		<h2>Generowanie ciągu Fibonacciego</h2>
		<form action='' method='post'>
			<label>Liczba wyrazów w ciągu N:</label>
			<input type='number' id='N' name='N'>
			<br>
			<input type='submit' value='Generuj Ciąg' name='oblicz'>
		</form>
		<?php
			if(isset($_REQUEST['oblicz']))
			{
				require 'oblicz.php';
				$N=$_POST['N'];
				
				ciagFibonacciego($N);	
			}		
		?>
	</div>
		

	<div style='break: both;'></div>
	<div id='stopka'>
		<p>Autor: Igor Łaskawiec 3gtb</p>
	</div>
	
</body>
</html>