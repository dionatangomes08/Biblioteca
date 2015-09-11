<?php
  require_once('connectvars.php');
  $msg = '';
  
      if ($_POST) {
        // Connect to the database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $dtnasc = $_POST['dtnasc'];       
        
        $query = "INSERT INTO pessoa (nome, datanascimento, cpf) VALUES ('".$nome."','".$dtnasc."','".$cpf."')";

        $buscapessoa = mysqli_query($dbc,"SELECT * FROM pessoa WHERE cpf = '".$cpf."' ;");

        if(mysqli_num_rows ($buscapessoa) == 0){
            $q = mysqli_query($dbc,$query);
            if($q){
              echo "<script language=javascript>alert( 'Pessoa Cadastrada com sucesso' );</script>";
            } else{
              echo "<script language=javascript>alert( 'Pessoa Não Cadastrada' );</script>";
            }
        }else{
            echo "<script language=javascript>alert( 'CPF já Cadastrado' );</script>";
        }
      }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Pessoa</title>
	<?php
		require_once('index.php'); 
	 ?>
</head>
<body>
	<div style="width:800px;margin:auto">
        <h3>Cadastro de Pessoa</h3>
        <form class="form-inline" action="cadastropessoa.php" method="post">
            <div class="form-group" style="margin:10px 0;">
                <label for="nome" style="width:100px;magin-left:20px;">Nome</label>
                <input type="text" class="form-control" required name="nome" placeholder="Nome" size="35">
            </div><br>
            <div class="form-group" style="margin:10px 0;">
                <label for="cfp" style="width:100px;magin-left:20px;">CPF</label>
                <input type="text" class="form-control" required name="cpf" placeholder="Somente Números">
            </div><br>
            <div class="form-group" style="margin:10px 0;">
                <label for="dtnasc" style="width:100px;magin-left:20px;">Data de Nascimento</label>
                <input type="date" class="form-control" required name="dtnasc" placeholder="Data">
            </div><br><br>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </form>
    </div>
</body>
</html>