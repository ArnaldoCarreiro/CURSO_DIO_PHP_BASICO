<?php

function validaNome(string $nome) : bool
{
	//Verifica se esta vazio
	if(empty($nome))
	{	
		//Colocando a mensagem de erro em uma SESSÃO
		setarMensagemErro( mensagem:'O nome não pode ser vazio, por favor preencha-o novamente');
		return false;
	}


	//Contar a quandotidade de caracter
	else if (strlen($nome) < 3) 
	{
		
		//Colocando a mensagem de erro em uma SESSÃO
		setarMensagemErro( mensagem:'O nome deve conter mais de três caracteres');
		return false;

		
	}

	else if (strlen($nome) > 40) 
	{

		//Colocando a mensagem de erro em uma SESSÃO
		setarMensagemErro( mensagem:'o nome é muito extenso');
		return false;

	}
	return true;
}

function validaIdade(string $idade) : bool
{
	//Verifica se é numero
	 if (!is_numeric($idade)) 
	{	
		//Colocando a mensagem de erro em uma SESSÃO
		setarMensagemErro( mensagem:'Informe um numero para a idade');
		return false;

	}
	return true;
}



	
?>