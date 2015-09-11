<?php
  require_once('connectvars.php');
  $msg = '';
  
      if ($_POST) {
        // Connect to the database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $nome = $_POST['nome'];
        $escritor = $_POST['escritor'];
        $edicao = $_POST['edicao'];
        $class = $_POST['classif'];        
        
        $query = "INSERT INTO livro (nome, escritor, anoedicao,classificacao) VALUES ('".$nome."','".$escritor."','".$edicao."','".$class."');";
      
        $q = mysqli_query($dbc,$query);
        if($q){
          echo "<script language=javascript>alert( 'Livro Cadastrado com sucesso' );</script>";
        } else{
          echo "<script language=javascript>alert( 'Livro Não Cadastrado' );</script>";
        }
      }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Livro</title>
	<?php
		require_once('index.php'); 
	 ?>
</head>
<body>
	<div style="width:800px;margin:auto">
        <h3>Cadastro de Livros</h3>
        <form class="form-inline" action="cadastrolivro.php" method="post">
            <div class="form-group" style="margin:10px 0;">
                <label for="nome" style="width:100px;magin-left:20px;">Nome</label>
                <input type="text" class="form-control" required name="nome" placeholder="Nome" size="100">
            </div><br>
            <div class="form-group" style="margin:10px 0;">
                <label for="nome" style="width:100px;magin-left:20px;">Escritor</label>
                <input type="text" class="form-control" required name="escritor" placeholder="Escritor" size="100">
            </div><br>
            <div class="form-group" style="margin:10px 0;">
                <label for="anoedicao" style="width:100px;magin-left:20px;">Ano Edição</label>
                <input type="number" class="form-control" required name="edicao">
            </div>
            <div class="form-group" style="margin:10px 0;">
                <label for="classificacao" style="width:100px;magin-left:20px;">Classificação</label>
                <input type="number" class="form-control" required name="classif" style="{margin-left:50px}">
            </div><br><br>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </form>
    </div>
</body>
</html>