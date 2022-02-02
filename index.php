<?php
include "servicos/servicoMensagemSessao.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name= "viewport" content="width-device-width, initial-scale-1">
</head>

<body>

	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

		<form action="script.php" method="post">
			<?php
				$mensagemDeErro = obterMensagemErro(); 
				
				if(!empty($mensagemDeErro)){// se a variavel $mensagemDeErro não estiver 'vazia', então executa o comando 
					echo $mensagemDeErro;
				}

				$mensagemDeSucesso = obterMensagemSucesso(); '';//Se um valor no array de SESSION de nome 'mensagem-de-sucesso' está ativo, atribui esse valor à variavel, se não, atribui ''(espaço vazio)  .
				
				if(!empty($mensagemDeSucesso)){ //se a variavel$mensagemDeSucesso não estiver 'vazia', então executa o comando
					echo $mensagemDeSucesso;
				}

			?>

			<p>Seu nome: <input type="text" name="nome"> </p>
			<p>Sua idade: <input type="text" name="idade"></p>
			<p><input type="submit" value="Enviar dados do competidor"></p>

		</form>

</body>
</html>