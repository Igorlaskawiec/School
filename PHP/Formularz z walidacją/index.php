<!DOCTYPE html>
<html>
<head>
	<title>Formularz</title>
</head>
<body>
	<form action="index.php" method="post">
			<label>Imię</label>
			<input type="text" name="imie" value="Jan"><br>
			<label>Nazwisko</label>
			<input type="text" name="nazwisko" value="Kowalski" ><br>
			<label>Data</label>
			<input type="text" name="data" value="03-05-2000"><br>
			<label>PESEL</label>
			<input type="number" name="pesel" value="09238767106"><br>
			<label>NIP</label>
			<input type="text" name="nip" value="111-222-33-44" ><br>
			<label>Kod pocztowy</label>
			<input type="text" name="kodPocztowy" value="05-870" ><br>
			<label>Miasto</label>
			<input type="text" name="miasto" value="Warszawa" ><br>
			<label>Adres</label>
			<input type="text" name="adres" value="Wiśniowa 56"><br>
			<label>Adres e-mail</label>
			<input type="text" name="email" value="jankowalski@tm1.pl" ><br>
			<label>Numer komórkowy</label>
			<input type="text" name="numKom" value="+48902377124"><br>
			<label>Numer stacjonarny</label>
			<input type="number" name="numStac" value="902377124" ><br>


			<input type="radio" name="plec"checked="true"> M
			<input type="radio" name="plec" > K<br><br>

			<input type="submit" name="wyslij" value="Wyślij">
			<input type="reset" value="Wyczyść">
		</form><br><br><br>	

		<?php

			$fp = fopen("users.txt", "a");
			if(isset($_POST['wyslij']))
			{	

				if (preg_match('/^([a-z|A-Z|]{1,20})$/', $_POST['imie'] )){
		        	echo $_POST['imie']."<br>";
					fputs($fp, $_POST['imie']." ");
		    	}else{echo "Błędnie wpisane imie <br>";}

		    	if (preg_match('/^([a-z|A-Z|]{1,20})$/', $_POST['nazwisko'] )){
		        	echo $_POST['nazwisko']."<br>";
					fputs($fp, $_POST['nazwisko']." ");
		    	}else{echo "Błędnie wpisane nazwisko <br>";}

		    	if (preg_match('/^([0-9]{1,2})-([0-9]{1,2})-([0-9]{1,4})$/', $_POST['data'] )){
		        	echo $_POST['data']."<br>";
					fputs($fp, $_POST['data']." ");
		    	}else{echo "Błędnie wpisana data <br>";}

		    	if (preg_match('/^([0-9]{1,11})$/', $_POST['pesel'] )){
		        	echo $_POST['pesel']."<br>";
					fputs($fp, $_POST['pesel']." ");
		    	}else{echo "Błędnie wpisany PESEL <br>";}

		    	if (preg_match('/^([0-9]{1,3})-([0-9]{1,3})-([0-9]{1,2})-([0-9]{1,2})$/', $_POST['nip'] )){
		        	echo $_POST['nip']."<br>";
					fputs($fp, $_POST['nip']." ");
		    	}else{echo "Błędnie wpisany NIP <br>";}

		    	if (preg_match('/^([0-9]{1,2})-([0-9]{1,3})$/', $_POST['kodPocztowy'] )){
		        	echo $_POST['kodPocztowy']."<br>";
					fputs($fp, $_POST['kodPocztowy']." ");
		    	}else{echo "Błędnie wpisany kod pocztowy <br>";}

		    	if (preg_match('/^([a-z|A-Z|]{1,20})$/', $_POST['miasto'] )){
		        	echo $_POST['miasto']."<br>";
					fputs($fp, $_POST['miasto']." ");
		    	}else{echo "Błędnie wpisane misato <br>";}

		    	if (preg_match('/^([a-z|A-Z|]{1,20})([0-9]{1,3})$/', $_POST['adres'] )){
		        	echo $_POST['adres']."<br>";
					fputs($fp, $_POST['adres']." ");
		    	}else{echo "Błędnie wpisany adres <br>";}

		    	if (preg_match('/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|com)$/', $_POST['email'] )) {
		    		echo $_POST['email']."<br>";
					fputs($fp, $_POST['email']." ");
		    	}else{echo "Błędnie wpisany email <br>";}

		    	if (preg_match('/[+]([0-9]{1,11})$/', $_POST['numKom'] )){
		        	echo $_POST['numKom']."<br>";
					fputs($fp, $_POST['numKom']." ");
		    	}else{echo "Błędnie wpisany numer komórkowy <br>";}

		    	if (preg_match('/([0-9]{1,9})$/', $_POST['numStac'] )){
		        	echo $_POST['numStac']."<br>";
					fputs($fp, $_POST['numStac']." ");
		    	}else{echo "Błędnie wpisany numer stacjonarny <br>";}	
			}
			fclose($fp);
		?>
</body>
</html>