<?php

function IsPositiveInt($value)
{
	return ctype_digit($value) && intval($value) >= 0;
}

if($_POST){
	var_dump($_POST);

	$input = $_POST["bouchra"];
	$params = split(" ", $input);

	switch (count($params)) {
		case 2:
			if($params[0] != "Mike")
			{
				$message = "Premiere valeur incorrecte";
			}
			else {
				if(((int)($params[1]))%2 == 0){
					echo "<p>le chiffre est pair</p>";
				$message = "le premier param est : " . $params[1] . "<br/>";
				
				}
				else{
					echo "<p>le chiffre est impair</p>";
				$message = "le premier param est : " . $params[1] . "<br/>";

				}
			}
			break;
		
		default:
			$message = "error";
			
			break;

	}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 1</title>
</head>
<body>
<?= $message;?>
	<form method="POST">
		<input type="text" name="bouchra" value="bouchra" >
		<input type="submit" name="valider" value="valider" >
	</form>
	<script type="text/javascript">

		

		console.log("<?= $message; ?>"); 
	</script>
</body>
</html>