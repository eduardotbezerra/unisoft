<?php
error_reporting(E_ALL | E_STRICT); //Irá mostrar qualquer erro

require 'conexao.php'; // Adicionou conexão
$usuario = $_POST["usuario"];

$query = "SELECT * FROM usuarios WHERE userId = '{$usuario}'";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    echo "<script> alert('Usuário já existente')</script>";


} else {

    if ($_POST) {
        //inicio de variáveis]
        $nome = $_POST["nome"];
        $userId = $_POST["usuario"];
        $usuario = $_POST["usuario"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        //fim de variáveis
echo 'a';
        //inicio de insert ta na tabela estabelecimentos
        $sql = "INSERT INTO usuarios ( id,userId, nome, usuario,endereco, email, senha, numero)
VALUES ( NULL, '$userId', '$nome','$usuario','$endereco', '$email', '$senha', '$numero')"; 
        //fim de insert ta na tabela estabelecimentos


        require 'conexao.php'; // Adicionou conexão

        $resultado = mysqli_query($con, $sql); // Adicionou o resultad do insert a variavel resultado

        if (!$resultado) { // Verifica se a query funcionou
            echo mysqli_error($con);
            echo $endereco;
        } else {
            echo '<script>alert("conta criada")</script>'; //confirma se a query funciono
            session_start(); //inicia sessão
            $_SESSION['nome'] = $nome;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nome'] = $nome;
            $_SESSION['endereco'] = $endereco;
            $_SESSION['numero'] = $numero;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: ../menu.php');
            exit();

        }
    }


}