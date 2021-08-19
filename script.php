<?php
	
	//incluindo as outras paginas 
	include "servicos/servicoMensagemSessao.php";
	include "servicos/servicoValidacao.php";
	include "servicos/servicoCategoriaCompetidor.php";

	//Recebendo valores do formulario
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	defineCategoriaCompetidor($nome, $idade);

	header('location: index.php');

?>