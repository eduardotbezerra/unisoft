<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscand Estabelecimento</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/listarProdutos.css">
        <link rel="stylesheet" href="../css/padrao.css">

    
    <style>
    body {
            img[src="https://cdn.000webhost.com/000webhost..."] { display: none;}
        
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }

    </style>
</head>

<body>
    <div class="content">
        <?php

      $localhost = "localhost";
      $username = "id11161822_root";
      $password = "bringme2019";
      $dbname = "id11161822_bringme";
      $con = new mysqli($localhost, $username, $password, $dbname);
      mysqli_set_charset($con, 'utf8');
      if($con->connect_error) {
          die("connection failed : " . $con->connect_error);
          echo 'Houve um erro, por favor informe o administrador';
}
mysqli_set_charset($con, 'utf8');

$pesquisa = $_POST['search'];

?>
<h5 class="center">Encontramos os seguintes estabelecimentos</h5>       

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
 
  <button class="btn waves-effect waves-light" type="submit" name="action">Ver Produtos
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
                <a href="../menu.php"><i class="material-icons">undor</i></a>


</body>


</html>