<?php
//Tratamento de condições formulário

function validaNome(string $nome) : bool
{

	// Se o campo nome estiver vazio:
	if(empty($nome)){
		setarMensagemErro('O nome não pode ser vazio. por favor, preencha-o novamente');
		return false;
}

	//Se a quantidade de caracteres no campo nome for menor que 3:
	else if(strlen($nome) < 3){
		setarMensagemErro('O nome não pode ser tão pequeno');
		return false;	
	}

	//Se a quantidade de caracteres no campo nome for maior que 40:
	else if(strlen($nome) > 40){
		setarMensagemErro('O nome não pode ser tão extenso');	 
		return false;
	}

	return true;
}

function validaIdade(string $idade) : bool
{

	// Se o valor digitado no campo idade for diferente de numérico:
	if(!is_numeric($idade)){
		setarMensagemErro('Informe um número para a idade');
		return false;
}
	return true;


}




