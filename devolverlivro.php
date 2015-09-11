<?php
  require_once('connectvars.php');
    if ($_POST) {
        // Connect to the database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $idlivro = $_POST['idlivro'];
        
        $idemprestimo = mysqli_query($dbc,"SELECT idemprestimo FROM emprestimo WHERE datahoradevolucao = '0000-00-00 00:00:00' AND idlivro='".$idlivro."'");
        $info = mysqli_fetch_array($idemprestimo);

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:m:s');



        $query = "UPDATE emprestimo SET datahoradevolucao = '".$date."' WHERE idemprestimo = ".$info['idemprestimo']." ;";
       
        $q = mysqli_query($dbc,$query);
        if($q){
            echo "<script language=javascript>alert( 'Livro Devolvido com sucesso' );</script>";
        }else{
            echo "<script language=javascript>alert( 'Emprestimo não encontrado' );</script>";
        }     
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Devolução de Livros</title>
	<?php
		require_once('index.php'); 
	 ?>
</head>
<body>
	<div style="width:800px;margin:auto">
        <h3>Lançamento de Devolução de Livros</h3>
        <form class="form-inline" action="devolverlivro.php" method="post">
            <div class="form-group" style="margin:10px 0;">
                <label for="idlivro" style="width:100px;magin-left:20px;">Código do Livro</label>
                <input type="number" class="form-control" required name="idlivro" placeholder="Código Livro" size="35">
            </div><br>
            <button type="submit" class="btn btn-default">Efetuar Devolução</button>
        </form>
    </div>
</body>
</html>