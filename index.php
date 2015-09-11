<!DOCTYPE html>
<html>
<head>
	<title>Biblitoeca</title>
	<link rel="stylesheet" type="text/css" href="css/meucss.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background-image: url(imagens/biblioteca.gif);
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-default">
    	<div class="container-fluid" style="background-color:#98FB98; margin:0px 300px;">
        	<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Biblioteca</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastropessoa.php">Cadastrar Pessoa</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="cadastrolivro.php">Cadastrar Livro</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Emprestimo <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="emprestimo.php">Emprestimo de Livro</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="devolverlivro.php">Devolução de Livro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>