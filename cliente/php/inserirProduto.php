<?php

session_start();
error_reporting(E_ALL|E_STRICT); //Irá mostrar qualquer erro

if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
}
  $logado = $_SESSION['usuario'];
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Produto</title>
</head>

<body>
<?php
include 'conexao.php';
mysqli_set_charset($con, 'utf8');


$vproduto   = $_POST["produto"];
        $vmarca  = $_POST["marca"];
        $vquantidade = $_POST["quantidade"];
        $vtipo    = $_POST["tipo"];
        $vobs     = $_POST["obs"];
        $vpreco     = $_POST["preco"];

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO produtos ( userId, produto, marca, quantidade, tipo, obs, preco)
VALUES ( '$logado','$vproduto','$vmarca', '$vquantidade', '$vtipo','$vobs','$vpreco')";

if (mysqli_query($con, $sql)) {
    echo "Produto inserido";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
</body>

</html>