<?php
session_start();
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
				$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';   //Se um valor no array de SESSION de nome 'mensagem-de-erro' está ativo, atribui esse valor à variavel, se não, atribui ''(espaço vazio)  .
				
				if(!empty($mensagemDeErro)){// se a variavel $mensagemDeErro não estiver 'vazia', então executa o comando (contendo a string definida em script.php)
					echo $mensagemDeErro;
				}

				$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';//Se um valor no array de SESSION de nome 'mensagem-de-sucesso' está ativo, atribui esse valor à variavel, se não, atribui ''(espaço vazio)  .
				
				if(!empty($mensagemDeSucesso)){ //se a variavel$mensagemDeSucesso não estiver 'vazia', então executa o comando (contendo a string definida em script.php)
					echo $mensagemDeSucesso;
				}

			?>

			<p>Seu nome: <input type="text" name="nome"> </p>
			<p>Sua idade: <input type="text" name="idade"></p>
			<p><input type="submit" value="Enviar dados do competidor"></p>

		</form>

</body>
</html>