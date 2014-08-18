<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <title>Cadastro</title>

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        <div class="container">
            <h2>Agenda de Contatos</h2>
            <hr>
			<?php
			// Carregamento das classes
			require_once("../Classes/Contato/Contato.php");
			// Recebi os valores passados via formulário
			$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
			$endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
			$dataNascimento = filter_input(INPUT_POST, "dataNascimento", FILTER_SANITIZE_STRING);
			// Instanciar o objeto
			$contato = new Contato();
			$contato->setNome($nome);
			$contato->setEmail($email);
			$contato->setEndereco($endereco);
			$contato->setDataNascimento($dataNascimento);
			?>
			
			Nome: <?=$contato->getNome()?><br>
			E-mail: <?=$contato->getEmail()?><br>
			Endereço: <?=$contato->getEndereco()?><br>
			Data de nascimento: <?=$contato->getDataNascimento()?><br>
            <hr>
            Copyright <?=date("Y")?> - Todos os direitos reservados
        </div>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>