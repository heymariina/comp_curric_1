<html>
	<head>
		<meta charset="utf-8">
		<title>exerc_04</title>
	</head>
	<body>
		<p>
			Exercício 4
		</p>

		<p>
			A)<br>-----------------------
		</p>
		<?php
		$frase = "Lactobacilos vivos também possuem sentimentos";

		for ($i = 0; $i < 25; $i++) {
			echo $frase . "<br>";
		}
		?>

		<p>
			B)<br>-----------------------
		</p>
		<?php
		$var = 10;
		while (0 <= $var) :
			echo $var-- . "<br>";
		endwhile;
		?>

		<p>
			C)<br>-----------------------
		</p>
		<?php
		$i = 10;
		$var = 20;
		while ($i <= $var) :
			echo $i++ . "<br>";
		endwhile;
		?>

		<p>
			D)<br>-----------------------
		</p>

		<?php
		$v1 = 3;
		$v2 = 5;
		$var = 0;
		for ($i = 0; $i < $v1; $i++) {
			echo $v2 . " ";
			$var = $var + $v2;
		}
		echo "=" . $var;
		?>

	</body>
</html>