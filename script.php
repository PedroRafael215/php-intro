<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];					//Recupera dados do formulário HTML de name='nome'
$idade = $_POST['idade'];				//Recupera dados do formulário HTML de name='idade'

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');




?>//end PHP