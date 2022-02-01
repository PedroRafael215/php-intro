<?php

session_start(); //starta a sessão

$categorias = [];                     	//Cria array que será preenchido com o nome das modalidades

$categorias[] = 'infantil';				//Atribuindo modalidade ao array
$categorias[] = 'adolescente';			//*
$categorias[] = 'adulto';				//*


$nome = $_POST['nome'];					//Recupera dados do formulário HTML de name='nome'
$idade = $_POST['idade'];				//Recupera dados do formulário HTML de name='idade'



//Tratamento de condições formulário


// Se o campo nome estiver vazio:
if(empty($nome)){
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. por favor, preencha-o novamente';
	header('location: index.php');
	return;
}

//Se a quantidade de caracteres no campo nome for menor que 3:
else if(strlen($nome) < 3){
	$_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
	header('location: index.php');	
	return;	
}

//Se a quantidade de caracteres no campo nome for maior que 40:
else if(strlen($nome) > 40){
	$_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
	header('location: index.php');	 
	return;
}

// Se o valor digitado no campo idade for diferente de numérico:
else if(!is_numeric($idade)){
	$_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
	header('location: index.php');	
	return;
}

//-----------------------------------------------------------------------------------------------------------------------------------------
//Resolução do problema (Se idade X, modalidade de natação é Y):

//1
else if($idade >= 6 && $idade <= 12){
	
	for($i=0; $i <= count($categorias); $i++){
		if($categorias[$i] == 'infantil'){
			
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
			header('location: index.php');
			return;
}}
			
	

//2
}else if($idade >= 13 && $idade <= 18){
	for($i=0; $i <= count($categorias); $i++){
		if($categorias[$i] == 'adolescente'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
			header('location: index.php');
			return;
		}
	}
}else{
//3	
	for($i=0; $i <= count($categorias); $i++){
		if($categorias[$i] == 'adulto'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
			header('location: index.php');
			return;
		}
	}
}
?>