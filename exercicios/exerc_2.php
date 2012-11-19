
<!-- 2 - 2.	Depois da tag <h1> criar uma div #conteudo e nela adicionar o seguinte código PHP: -->
<?php
$nome1 = "Fulano";
$nome2 = "Fulana";
$nome3 = "Ciclano";
$sexo1 = "M";
$sexo2 = "F";
$sexo3 = "M";
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>exerc_02</title>
	</head>
	<body>
		<h1>2-A</h1>

		<p>
			<?php echo $nome1 . "," . $nome2 . "," . $nome3; ?>
		</p>

		<?php
		if($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){
		?>
		<p>
			A equipe é formada por meninos
		</p>
		<?php }
			elseif($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F"){
		?>
		<p>
			A equipe é formada por meninas
		</p>
		<?php }
			else {
 ?>
		<p>
			A equipe é mista
		</p>
		<?php } ?>

	</body>
</html>