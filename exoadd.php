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
		case 3:
			if ($params[0] != "Mike")
			{
				$message = "Premiere valeur incorrecte";
			} 
            else {
				if (IsPositiveInt($params[1]) && IsPositiveInt($params[2]))
				{
                    $nbr  = ((int)($params[1]));
                    $nbr1 = ((int)($params[2]));
                    $resultat = $nbr + $nbr1;
                    echo "<p> $resultat </p>";
				}
                else{
                    echo "Erreur de paramètres";
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