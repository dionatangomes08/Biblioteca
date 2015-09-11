<?php
  require_once('connectvars.php');
    if ($_POST) {
        // Connect to the database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $idlivro = $_POST['idlivro'];
        $idpessoa = $_POST['idpessoa'];
        
        $querypessoa = mysqli_query($dbc,"SELECT * FROM emprestimo WHERE datahoradevolucao='0000-00-00 00:00:00' AND idpessoa='".$idpessoa."'");
        $querylivro = mysqli_query($dbc,"SELECT * FROM emprestimo WHERE datahoradevolucao='0000-00-00 00:00:00' AND  idlivro='".$idlivro."'");
        $queryclassif = mysqli_query($dbc,"SELECT classificacao FROM livro WHERE idlivro='".$idlivro."'");
        $queryidade = mysqli_query($dbc,"SELECT datanasc FROM pessoa WHERE idpessoa='".$idpessoa."'");

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');


        if(mysqli_num_rows($querypessoa)<2){
            if(mysqli_num_rows($querylivro)== 0){
                
                $query = "INSERT INTO emprestimo (idpessoa, idlivro, dataemprestimo) VALUES ('".$idpessoa."','".$idlivro."','".$date."');";
                $q = mysqli_query($dbc,$query);
                if($q){
                    echo "<script language=javascript>alert( 'Livro Emprestado com sucesso' );</script>";
                }
            }else{
                echo "<script language=javascript>alert( 'Livro já foi Emprestado!' );</script>";
            }       
        }else{
            echo "<script language=javascript>alert( 'Limite de Livros Excedidos' );</script>";
        }     
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Emprestimo de Livros</title>
	<?php
		require_once('index.php'); 
	 ?>
</head>
<body>
	<div style="width:800px;margin:auto">
        <h3>Lançamento de Empréstimo de Livros</h3>
        <form class="form-inline" action="emprestimo.php" method="post">
            <div class="form-group" style="margin:10px 0;">
                <label for="idlivro" style="width:100px;magin-left:20px;">Código do Livro</label>
                <input type="number" class="form-control" required name="idlivro" placeholder="Código Livro" size="35">
            </div><br>
            <div class="form-group" style="margin:10px 0;">
                <label for="idpessoa" style="width:100px;magin-left:20px;">Código da Pessoa</label>
                <input type="number" class="form-control" required name="idpessoa" placeholder="Código Pessoa" size="35">
            </div><br>
            <button type="submit" class="btn btn-default">Efetuar Empréstimo</button>
        </form>
    </div>
</body>
</html>