<?php
	session_start();

	//Criando função para Armazenar e Mostrar a Mensagem de Erro
	function setarMensagemErro(string $mensagem) : void
	{
		$_SESSION['mensagem_de_erro'] = $mensagem;
	}

	function obterMensagemErro() : ?string
	{
		if (isset($_SESSION['mensagem_de_erro'])) 
			return $_SESSION['mensagem_de_erro'];
		
		return null;
	}


	//Criando função para Armazenar e Mostrar a Mensagem de Sucesso
	function setarMensagemSucesso(string $mensagem) : void
	{
		$_SESSION['mensagem_de_sucesso'] = $mensagem;
	}

	function obterMensagemSucesso() : ?string
	{
		if (isset($_SESSION['mensagem_de_sucesso'])) 
			return $_SESSION['mensagem_de_sucesso'];

		return null;
	}


	//Criando função para Remover a Mensagem de Sucesso e de Erro
	function removerMensagemErro() : void
	{
		if (isset($_SESSION['mensagem_de_erro'])) 
			unset($_SESSION['mensagem_de_erro']);
		
	}

	function removerMensagemSucesso() : void
	{
		if (isset($_SESSION['mensagem_de_sucesso'])) 
			unset($_SESSION['mensagem_de_sucesso']);
		
	}
?>