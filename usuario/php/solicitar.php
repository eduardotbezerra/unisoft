<?php
session_start();
$nome = $_SESSION['nome'];
$logado = $_SESSION['usuario'];
$endereco = $_SESSION['endereco'];

echo $logado;
echo $endereco;


$estabelecimento = $_POST["estabelecimento"];
$produto = $_POST["produto"];
$marca = $_POST["marca"];
$tipo = $_POST["tipo"];
$obs = $_POST["obs"];
$preco = $_POST["preco"];

include 'conexao.php';
        $sql = "INSERT INTO pedidos (estabelecimento,usuario,produto,marca,tipo,preco,obs)
    VALUES ('$estabelecimento','$nome','$produto','$marca', '$tipo', '$preco', '$obs')";
        if (mysqli_query($con, $sql)) { // verifica se produto foi inserido, se inserido retorna uma mensagem positiva
            echo '<script> alert("Produto Comprado Com Sucesso") </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);  // verifica se produto foi inserido, se não inserido retorna uma mensagem negativa
        }




echo "";
mysqli_close($con); // fecha conexão com banco de dados
?>