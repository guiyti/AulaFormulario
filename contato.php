<!DOCTYPE html>
<html>
<head>
	<title>Contato - Enviado</title>
</head>
<body>
	<header>
		<h3>Contato - Enviado</h3>
		<p>Obrigado por entrar em contato conosco!</p>
	</header>
<nav>
	<ul>
		<li><a href="index.html">Índice</a></li>
		<li><a href="imagensdodia.html">Imagens do Dia</a></li>
		<li><a href="noticiasdodia.html">Notícias do Dia</a></li>
		<li><a href="contato.html">Contato</a></li>
	</ul>
</nav>

<main>
	<?php
	// Verifica se os dados do formulário foram enviados
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Armazena os dados do formulário em variáveis
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$mensagem = $_POST["mensagem"];
		$sexo = $_POST["sexo"];
		$idade = $_POST["idade"];
		$newsletter = isset($_POST["newsletter"]) ? "Sim" : "Não";

		// Imprime os dados na tela
		echo "<h4>Informações Enviadas:</h4>";
		echo "<p><strong>Nome:</strong> $nome</p>";
		echo "<p><strong>Email:</strong> $email</p>";
		echo "<p><strong>Assunto:</strong> $assunto</p>";
		echo "<p><strong>Mensagem:</strong> $mensagem</p>";
		echo "<p><strong>Sexo:</strong> $sexo</p>";
		echo "<p><strong>Idade:</strong> $idade</p>";
		echo "<p><strong>Receber Newsletter:</strong> $newsletter</p>";
	}
	?>
</main>

<footer>
<p id="processado"></p>
	<script>
		// Cria um objeto de data e formata a mensagem
		var data = new Date();
		var dia = data.getDate().toString().padStart(2, '0');
		var mes = (data.getMonth() + 1).toString().padStart(2, '0');
		var ano = data.getFullYear();
		var mensagem = "Processado em " + dia + "/" + mes + "/" + ano + ".";
		
		// Insere a mensagem na página
		document.getElementById("processado").innerHTML = mensagem;
	</script>
</footer>
</body>
</html>