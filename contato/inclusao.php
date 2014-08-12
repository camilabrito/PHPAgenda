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
            <form class="form-signin" role="form" action="incluir.php">
                <input type="hidden" name="logica" value="GravaContatoLogic">
                <input type="hidden" name="id" value="${contato.id}">
                <div class="form-group">
                    <label for="nome">Nome:</label> 
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label> 
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label> 
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de nascimento:</label>
                    <input type="text" class="form-control" id="dataNascimento" name="dataNascimento">
                </div>
                <button type="submit" class="btn btn-default">Gravar</button>
                <button type="reset" class="btn btn-default">Limpar campos</button>
            </form>
            <hr>
            Copyright <?=date("Y")?> - Todos os direitos reservados
        </div>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>