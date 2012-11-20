<!-- 10 - No formulário do item 9, criar as seguintes validações:
a) verificar se o campo está vazio, caso verdadeiro informar ao usuário (em campos obrigatórios)
b) para o campo “email” deve verificar se ele realmente é um e-mail
c) retirar as tags html, script, php, dos campos com strip_tags()
d) criptografar o campo password com a função md5() -->

<?php
	if (isset($_POST["pagina"]) && $_POST["pagina"] == "informa") {
		echo strip_tags($_POST["nome"])."<br>";
	}else{

		header("Location: exerc_9.php");
		echo "Todos os campos devem ser preenchidos.";
	}
		if (isset($_POST["pagina"]) && $_POST["pagina"] == "informa") {
		echo strip_tags($_POST["email"])."<br>";
			}else{

		header("Location: exerc_9.php");
		echo "Todos os campos devem ser preenchidos.";
	}
			
		if(isset($_POST["sexo"])) {
			echo "Feminino <br>";
		} else {
			echo "Masculino <br>";
		}
		
	
?>
