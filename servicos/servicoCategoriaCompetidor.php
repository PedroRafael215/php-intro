<?php



function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

	$categorias = [];                     	//Cria array que será preenchido com o nome das modalidades

	$categorias[] = 'infantil';				//Atribuindo modalidade ao array
	$categorias[] = 'adolescente';			//*
	$categorias[] = 'adulto';				//*


if(validaNome($nome) && validaIdade($idade)) 
{
	removerMensagemErro();

	//Resolução do problema (Se idade X, modalidade de natação é Y):
	//1
	 if($idade >= 6 && $idade <= 12){
		
		for($i=0; $i <= count($categorias); $i++){
			if($categorias[$i] == 'infantil'){
				setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
				return null;
	}}
				
		

	//2
	}else if($idade >= 13 && $idade <= 18){
		for($i=0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == 'adolescente')
			{
				setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
				return null;
			}
		}
	}else{
	//3	
		for($i=0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == 'adulto')
			{
				setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
				return null;
			}
		}
	}



}else{
	removerMensagemSucesso();
	return obterMensagemErro();
}

	

}