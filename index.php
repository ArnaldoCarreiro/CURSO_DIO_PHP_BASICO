<?php
	include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	//Criando o Form
	<form  action="script.php" method="post">	
		<p>Dados do Competidor</p>

		//Inserindo a Mensagem de Erro / Mensagemd de Sucesso
		<?php 	

			$mensagemDeSucesso = obterMensagemSucesso();
			if (!empty($mensagemDeSucesso)) 
			{
				echo $mensagemDeSucesso;
			}

			$mensagemDeErro = obterMensagemErro();
			if (!empty($mensagemDeErro)) 
			{
				echo $mensagemDeErro;
			}
		?>
		<p>Nome: <input type="text" name="nome"></p>
		<p>Idade: <input type="text" name="idade"></p>
		<input type="submit" value="Enviar">
	</form>



</body>
</html>