<!DOCTYPE html>
<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['usuario'];
?>
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
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
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
        <!-- Criando tabela e cabeçalho de dados: -->
        <table class="table table-bordered table-stripped" style='width:60%; margin:auto;'>
            <tr>
                <strong>
                    <td class="title">produto</td>
                </strong>
                <strong>
                    <td class="title">marca</td>
                </strong>
                <strong>
                    <td class="title">quantidade</td>
                </strong>
                <strong>
                    <td class="title">tipo</td>
                </strong>
                <strong>
                    <td class="title">preco</td>
                </strong>
                <strong>
                    <td class="title">obs</td>
                </strong>
                <td></td>
            </tr>
            <a href="../pages/listarProdutos.php">Voltar</a>

            <!-- Preenchendo a tabela com os dados do banco: -->
            <?php
$sql = "SELECT * FROM produtos WHERE produto = '$pesquisa' AND userId = '$logado'";
$resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado))
{
  $produto = $registro['produto'];
  $marca = $registro['marca'];
  $quantidade = $registro['quantidade'];
  $tipo = $registro['tipo'];
  $preco = $registro['preco'];
  $obs = $registro['obs'];


  echo "<tr>";
  echo "<td>".$produto."</td>";
  echo "<td>".$marca."</td>";
  echo "<td>".$quantidade."</td>";
  echo "<td>".$tipo."</td>";
  echo "<td>".$preco."</td>";
  echo "<td>".$obs."</td>";
  echo "</tr>";
}
mysqli_close($con);
echo "</table>";
?>
    </div>

</body>

</html>