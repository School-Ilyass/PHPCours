<?php
$num=$_GET["nombre"];
	# retourne le code HTML (une chaîne de caractères)
	# d'une table contenant les diviseurs de '$N'
	# (une seule ligne, autant de colonnes que de diviseurs)
	function diviseurs($N) {
		$Result = array();
		for($i = 1 ; $i <= $N ; $i++){
			if($N % $i == 0){
				array_push($Result , $i);
			}
		}
		return $Result;
	
	}

	
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 3</title>
		<meta name="author" content="LP IMApp">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 3</h1>
		<hr>
		<h2> 
		<?php 
		foreach(diviseurs($num) as $value){
			echo $value .  ' ';
		}
		?>
		</h2>

	</body>
</html>
