<html>
	<head>
		<meta charset="utf-8">
		<title>exerc_05</title>
	</head>
	<body>
		<p>
			Exercício 5
		</p>

		<?php

		function multiplica($v1, $v2) {

			$var = 0;
			for ($i = 0; $i < $v1; $i++) {
				if($i == $v1 - 1){
					echo $v2 . " ";
					$var = $var + $v2;
				}
				if($i < $v1 - 1){
					echo $v2 . "+";
					$var = $var + $v2;
				}
			}
			echo "=" . $var;
		}

		multiplica(3, 5);
		?>

	</body>
</html>