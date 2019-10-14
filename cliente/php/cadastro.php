<?php
if ($_POST) {
    //inicio e variáveis 
    $userId = $_POST['usuario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $estabelecimento = $_POST['estabelecimento'];
    //fim de variáveis 


    //inicio de insert ta na tabela estabelecimentos
    $sql = "INSERT INTO estabelecimentos (userId,usuario,senha,estabelecimento,email)
    VALUES ('$userId','$usuario', '$senha', '$estabelecimento', '$email')";
    //fim de insert ta na tabela estabelecimentos


    require 'conexao.php'; // Adicionou conexão

    $resultado = mysqli_query($con, $sql); // Adicionou o resultad do insert a variavel resultado

    if (!$resultado) { // Verifica se a query funcionou
        echo mysqli_error($con);
        exit;
    } else {
        echo 'Cliente foi salvo'; //confirma se a query funcionou
        exit;
    }
}