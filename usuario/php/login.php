<?php
session_start(); //inicia sessão

include 'conexao.php';

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];

$query = "SELECT * FROM usuarios WHERE userId = '{$usuario}' AND senha = '{$senha}' and nome = '{$nome}'";

 
$result = mysqli_query($con, $query);
 
$row = mysqli_num_rows($result);
$endereco = $row['endereco'];
 
if($row == 1) {
	$query = "SELECT * FROM usuarios WHERE userId = '{$usuario}' AND senha = '{$senha}'";
	$result = mysqli_query($con, $query);
	$row = mysqli_num_rows($result);

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['nome'] = $nome;
	$_SESSION['endereco'] = $endereco;



	header('Location: ../menu.php');
	exit();
} else { 
	unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
	 header('Location:../pages/login.php');

}


