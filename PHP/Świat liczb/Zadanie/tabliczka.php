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


	<div id='prawy'>
		<h3>Wymiary tablicy</h3>
		<form action="tabliczka.php" method="post">
			wiersze  <input type="text" name="x">
			kolumny <input type="text" name="y">
			<input type="submit" value="OK">
		<?php
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
				tablica($x, $y);
			}
		?>
	</div>
		

	<div style='break: both;'></div>
	<div id='stopka'>
		<p>Autor: Igor Łaskawiec 3gtb</p>
	</div>
	
</body>
</html>