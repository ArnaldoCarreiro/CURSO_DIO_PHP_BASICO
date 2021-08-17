<?php
	// Iniciando uma sessão 
	session_start();

	//Criando e definindo um array
	$categorias = [];
	$categorias[] = 'infantil';
	$categorias[] = 'adolescente';
	$categorias[] = 'adulto';

	//Recebendo valores do formulario
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	//Verifica se esta vazio

	 if(empty($nome))
	{	
		//Colocando a mensagem de erro em uma SESSÃO
		$_SESSION['mensagem_de_erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
		header('location: index.php');
	}


	//Contar a quandotidade de caracter
	else if (strlen($nome) < 3) 
	{
		
		//Colocando a mensagem de erro em uma SESSÃO
		$_SESSION['mensagem_de_erro'] = 'O nome deve conter mais de três caracteres';
		header('location: index.php');
		
	}

	else if (strlen($nome) > 40) 
	{

		//Colocando a mensagem de erro em uma SESSÃO
		$_SESSION['mensagem_de_erro'] = 'o nome é muito extenso';
		header('location: index.php');
	}

	//Verifica se é numero
	else if (!is_numeric($idade)) 
	{	
		//Colocando a mensagem de erro em uma SESSÃO
		$_SESSION['mensagem_de_erro'] = 'Informe um numero para a idade';
		header('location: index.php');
	}



	if ($idade >= 6 && $idade <=12) 
	{
		for ($i= 0; $i <= count($categorias) ; $i++) 
		{ 
			if($categorias[$i] == "infantil") 
			
			//Colocando a mensagem de sucesso em uma SESSÃO
			$_SESSION['mensagem_de_sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
			
		}
	}
	elseif ($idade >= 13 && $idade <= 18) 
	{
		for ($i= 0; $i <= count($categorias) ; $i++) 
		{ 
			if ($categorias[$i] == 'adolescente') 
			
			//Colocando a mensagem de sucesso em uma SESSÃO
			$_SESSION['mensagem_de_sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
	
		}
	}	
	else
	{
		for ($i= 0; $i <= count($categorias) ; $i++) 
		{ 
			if($categorias[$i] == 'adulto') 
			
			//Colocando a mensagem de sucesso em uma SESSÃO
			$_SESSION['mensagem_de_sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
		
		}
	}		
?>