<?php
if ($_POST) {
    $userId = $_POST['usuario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $estabelecimento = $_POST['estabelecimento'];

    
    $sql = "INSERT INTO estabelecimentos (userId,usuario,senha,estabelecimento,email)
    VALUES ('$userId','$usuario', '$senha', '$estabelecimento', '$email')";
    
    require 'conexao.php';
    
    $resultado = mysqli_query($con, $sql);
    
    if (!$resultado) {
        echo mysqli_error($con);
        exit;
    }
    else {
        echo 'Cliente foi salvo';
        exit;
    }
}