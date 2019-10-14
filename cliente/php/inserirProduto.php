<?php

session_start(); // inicia sessão do usuário
$logado = $_SESSION['usuario']; //adiciona usuário logado a variável "logado"

error_reporting(E_ALL|E_STRICT); //Irá mostrar qualquer erro

if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) // Informa se a variáveis usuário e senha foram iniciadas


{
  unset($_SESSION['usuario']); //destroi variáveis usuário e senha caso não tenham  iniciada;
  unset($_SESSION['senha']);
}
  $logado = $_SESSION['usuario']; //adiciona usuário logadoa variável "logado"
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
include 'conexao.php'; //inclui conexão
mysqli_set_charset($con, 'utf8'); // para acentuar palavras

//inicio variáveis para inserir produtos;
        $vproduto   = $_POST["produto"]; 
        $vmarca  = $_POST["marca"];
        $vquantidade = $_POST["quantidade"];
        $vtipo    = $_POST["tipo"];
        $vobs     = $_POST["obs"];
        $vpreco     = $_POST["preco"];
//fim variáveis para inserir produtos;

if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); //verifica se conexçao foi realizada, caso não, informa.
}

$sql = "INSERT INTO produtos ( id,userId, produto, marca, quantidade, tipo, obs, preco)
VALUES ( NULL, '$logado','$vproduto','$vmarca', '$vquantidade', '$vtipo','$vobs','$vpreco')";  // insere produtos utilizand as variáveis

if (mysqli_query($con, $sql)) { //verifica se produto foi inserido, se inserido retorna uma mensagem positiva
   echo 'Produto Inserido Com Sucesso';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);  //verifica se produto foi inserido, se não inserido retorna uma mensagem negativa
}

mysqli_close($con); //fecha conexão com banco de dadoss
?>
</body>

</html>