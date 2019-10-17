<?php
session_start();
include 'conexao.php';
$estabelecimento = $_POST["estabelecimento"];
$_SESSION['estabelecimento'] = $estabelecimento;
$_SESSION['usuario'] = "jão";
$logado = $_SESSION['usuario'];
$produto = $_POST["produto"];
$marca = $_POST["marca"];
$tipo = $_POST["tipo"];
$obs = $_POST["obs"];
$preco = $_POST["preco"];


        $sql = "INSERT INTO pedidos (estabelecimento,userId,produto,marca,tipo,preco,obs)
    VALUES ('$estabelecimento','$logado','$produto','$marca', '$tipo', '$preco', '$obs')";
        if (mysqli_query($con, $sql)) { // verifica se produto foi inserido, se inserido retorna uma mensagem positiva
            echo '<script> alert("Produto Comprado Com Sucesso") </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);  // verifica se produto foi inserido, se não inserido retorna uma mensagem negativa
        }




echo "";
mysqli_close($con); // fecha conexão com banco de dados
?>