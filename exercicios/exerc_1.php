<meta charset="UTF-8">

	<?php
		/* 1 - 1.	Criar um arquivo PHP, e fazer o seguinte:
 		a) Criar a estrutura HTML
 		b) no Inicio do documento, criar a variável $title = “Site.com” e $subtitle = “este é um site em PHP”;
 		c) na tag <title> mostrar o seguinte texto concatenado: “Site.com – este é um site em PHP”;
 		d) dentro da DIV #rodape adicionar o seguinte texto: “® copyright Site.com – 2012”, sendo que o ® deve utilizar
 		* o código &reg; (HTML Entities) no html e o ano, deve ser mostrado o ano atual através do PHP com a função date.
 		*/
	$title = "Site.com";
	$subtitle = "este é um site em PHP";
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>
			<?php
			echo $title . "-" . $subtitle;
			//. é para concatenar
			$ano = date("Y");
			?>
		</title>
	</head>
	<body>
		<?php
		echo $title . "-" . $subtitle;
		?>
		
		<div id="rodape">
		<p>&reg; copyright Site.com – <?php echo $ano; ?></p>
		</div>

	</body>
</html>

