<!DOCTYPE html>
<html>
	<head>
		<title>TABLICZKA</title>
	</head>
	<body style="font-family: Comic Sans MS">
		<center><h3>Wymiary tablicy</h3>
		<form action="index.php" method="post">
			Wiersze  <input type="text" name="x">
			Kolumny  <input type="text" name="y">
			<input type="submit" value="OK">
			<br>
			<br>
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
			$x = $_POST["x"];
			$y = $_POST["y"];
			if($x <= 0 || $y <= 0)
				echo "<h3>Podaj wielkości większe od zera</h3>";
			else
			{
				echo "<br>Tabliczka $x x $y";
				tablica($x, $y);
			}
		?>
	</body>
</html>
