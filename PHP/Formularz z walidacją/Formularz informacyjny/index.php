<!DOCTYPE html>
<html>
	<head>
		<title>Formularz kontaktowy</title>
	</head>
	<body>
		<h3>Formularz kontaktowy</h3>
		<form action="index.php" method="post">
			<label>Nazwisko</label>
			<input type="text" name="nazw"><br>
			<label>Imię</label>
			<input type="text" name="imie"><br>
			<label>Zawód</label>
			<input type="text" name="zawod"><br>
			<label>Adres e-mail</label>
			<input type="text" name="email"><br><br>


			<label>Wykształcenie</label><br>
			<input type="radio" name="wykszt" value="podstawowe"> Podstawowe<br>
			<input type="radio" name="wykszt" value="srednie"> Średnie<br>
			<input type="radio" name="wykszt" value="wyzsze"> Wyższe<br><br>

			W jakim języku programujesz?
  				<input type="checkbox" name="progr[]" value="PHP">PHP<br>
  				<input type="checkbox" name="progr[]" value="JavaScript">JavaScript<br>
 				<input type="checkbox" name="progr[]" value="Python">Python<br>
  				<input type="checkbox" name="progr[]" value="CPP">C++<br>
  				<input type="checkbox" name="progr[]" value="Java">Java<br><br>	
  				<input type="checkbox" name="opcje" maxlength="1">Zgadzam się na przetwarzanie danych osobowych<br>	
	
			<input type="submit" name="wyslij" value="Wyślij">
			<input type="reset" value="Wyczyść">
		</form><br><br><br>	
	
		<?php

			if(isset($_POST['wyslij']))
			{
				echo "Nazwisko: ".$_POST['nazw']."</br>";
				echo "Imię: ".$_POST['imie']."</br>";
				echo "Zawód: ".$_POST['zawod']."</br>";
				echo "Adres e-mail: ".$_POST['email']."</br>";
			}


			if(!isset($_POST['wykszt']))
			{
				echo "Proszę zaznaczyć wykształcenie <br>";
				
			}else{

				echo "Wykształcenie: ".$_POST['wykszt']."<br>";

			}


				if(!isset($_POST['progr']))
			{
				echo "Brak znajomości języków programowania <br>";
				
			}else{

				$jp = $_POST['progr'];
				$n = count($jp);

				echo "Wybrano $n spośród języków programowania. <br>";
				for ($i=0; $i < $n ; $i++) { 
					echo ($jp[$i]."<br>");
				}

			}

				if(isset($_POST['opcje']))
			{
				echo "Wyrazono zgode <br>";
				
			}



		?>
	</body>
</html>
