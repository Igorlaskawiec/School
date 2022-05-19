
<!DOCTYPE html>
<html>
<head>
	<title>Tabliczka mnozenia</title>
</head>
<body style="font-family: Comic Sans MS">

	<center><h1>Tabliczka mnożenia</h1>
<table style="background-color: yellow;" border=4 >
<?php 
/*
for($i=1;$i<=10;$i++){
	echo '<tr style="background-color: green">';
	for($j=1;$j<=10;$j++){
		echo '<td>'.($i*$j).'</td>';
	}
	echo '</tr>';
}
*/

$i =1;
while ($i <= 10) {
	echo '<tr>';
	if($i==1){
		echo '<tr style="background-color:red;">';
	}
	$j=1;
	while ($j<=10){

		
			if($j==1){
		echo '<td style="background-color:red;">'.($i*$j).'</td>';
	}else{
	echo '<td>'.($i*$j).'</td>';
}

	$j++;
	}
	echo '<tr>';
	$i++;
}

?>
</table>


</body>
</html>