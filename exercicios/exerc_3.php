<?php
$qtd = 2;
?>

<!Doctype html>
<html>
	<head>
		<title>exerc_03</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
		switch($qtd) {

			case 0 :
				echo "Não possui nenhum produto cadastrado";
				break;
			case 1 :
				echo "Você possui um produto cadastrado";
				break;
			case ( $qtd == 2 ||  $qtd==3) :
				echo "Você possui vários produtos cadastrados";
				break;
			default :
				echo "Cadastro inválido, tente novamente";
				break;
		}
		?>
	</body>
</html>