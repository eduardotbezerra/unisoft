<?php
error_reporting(E_ALL | E_STRICT); //Irá mostrar qualquer erro

require 'conexao.php'; // Adicionou conexão
$userId = $_POST["usuario"];
$usuario = $_POST["usuario"];
$estabelecimento = $_POST["estabelecimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$query = "SELECT userId FROM estabelecimentos WHERE userId = '{$usuario}'";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    echo "<script> alert('Usuário já existente')</script>";


} else {

    if ($_POST) {
        //inicio de variáveis
        $userId = $_POST['usuario'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $estabelecimento = $_POST['estabelecimento'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $estabelecimento = $_POST['estabelecimento'];
        //fim de variáveis

        //inicio de insert ta na tabela estabelecimentos
        $sql = "INSERT INTO estabelecimentos (userId,usuario,senha,estabelecimento,email,telefone,endereco)
    VALUES ('$userId','$usuario', '$senha', '$estabelecimento', '$email', '$telefone', '$endereco')";
        //fim de insert ta na tabela estabelecimentos


        require 'conexao.php'; // Adicionou conexão

        $resultado = mysqli_query($con, $sql); // Adicionou o resultad do insert a variavel resultado

        if (!$resultado) { // Verifica se a query funcionou
            echo mysqli_error($con);
            echo $endereco;
        } else {
            echo '<script>alert("conta criada")</script>'; //confirma se a query funciono
            session_start(); //inicia sessão
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['estabelecimento'] = $estabelecimento;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['email'] = $email;
            $_SESSION['endereco'] = $endereco;

            header('Location: ../pages/menu.php');
            exit();

        }
    }


}