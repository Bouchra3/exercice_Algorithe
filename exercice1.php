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
			} else {
				if (IsPositiveInt($params[1]) && IsPositiveInt($params[2]))
				{
					$message = "le premier param est : " . $params[1] . "\\r\\n";
					$message .= "le 2eme param est : " . $params[2];
				} else {
					$message = "Veuillez rentrez une valeur numeric positif !";
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