<!DOCTYPE html>
<html>
	<head>
		<title>Formularz językowy</title>
	</head>
	<body>
		<h3>Formularz językowy</h3>

		<form action="index.php" method="post">
			Nazwisko i Imię: <br>
			<input type="text" name="nazw" value=" "><br>
			Wybór języka: <br>
			<select name="jezyki[]" multiple>
				<option value="angielski">Język angielski</option>
				<option value="niemiecki">Język niemiecki</option>
				<option value="francuski">Język francuski</option>
			</select>

			<input type="submit" name="wyslij" value="Wyślij">
		</form>
	
		<?php

			if (!empty($_POST['jezyki'])) {
				echo $_POST['nazw']." zna: ";
				echo "<ul>";
				foreach ($_POST['jezyki'] as $wartosc) {
					echo "<li>$wartosc</li>";
				}
				echo "</ul>";
			}else{

				echo $_POST['nazw']." Nie zna żadnego jezyka";
			}
			

			echo TIME()/3600/24/365;

		?>
	</body>
</html>
