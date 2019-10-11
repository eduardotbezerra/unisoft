<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title of the document</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/listarProdutos.css">
    
    <style>
    body {
        
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
    </style>
</head>

<body>
    <div class="content">
        <?php

include_once 'conexao.php';
mysqli_set_charset($con, 'utf8');

$pesquisa = $_POST['search'];
?>
       
            <a href="../menu.php">Voltar</a>

            <?php
$sql = "SELECT * FROM clientes WHERE restaurante = '$pesquisa'";
$resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))
{
  $estabelecimento = $registro['restaurante'];
  $id = $registro['id'];
  
  

echo'<form action="mostrarProdutos.php" method="post">

<div class="collection">
  <a href="#!" class="collection-item">
  <input name="search" value='.$estabelecimento.' id="search" readonly><br>
 
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
</button>
  
</div>
</form>
';
 
}
mysqli_close($con);
echo "</table>";
?>

    </div>

</body>


</html>