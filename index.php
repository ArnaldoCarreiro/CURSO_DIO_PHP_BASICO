<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>

	<form  action="script.php" method="post">	
		<p>Dados do Competidor</p>
		<?php 	

			$MensagemDeSecesso = isset($_SESSION['mensagem_de_sucesso']) ? $_SESSION['mensagem_de_sucesso'] : ' ';
			if (!empty($MensagemDeSecesso)) 
			{
				echo $MensagemDeSecesso;
			}

			$MensagemDeErro = isset($_SESSION['mensagem_de_erro']) ? $_SESSION['mensagem_de_erro'] : ' ';
			if (!empty($MensagemDeErro)) 
			{
				echo $MensagemDeErro;
			}
		?>
		<p>Nome: <input type="text" name="nome"></p>
		<p>Idade: <input type="text" name="idade"></p>
		<input type="submit" value="Enviar">
	</form>



</body>
</html>