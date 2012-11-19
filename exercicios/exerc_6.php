<!-- 6 -Fazer uma função chamada imprime() que faça o seguinte:
a) receba um parâmetro
b) retorne uma string que deverá estar dentro da tag <p>. Ex:
“<p> $parametro</p>” -->

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>exer06</title>
	</head>
	<body>

		<?php
		function imprimir_parametro($parametro) {
			echo "$parametro";
		}

		imprimir_parametro("Exercicio 6, recebendo parametro e retornando como string");
		?>

	</body>
</html>

