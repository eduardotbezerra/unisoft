<?php
session_start(); //inicia sessão

include 'conexao.php';

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
$usuario = $_POST["usuario"];
$vsenha = $_POST["senha"];
$telefone = $_POST["telefone"];
$estabelecimento = $_POST["estabelecimento"];

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$query = "SELECT userId FROM estabelecimentos WHERE userId = '{$usuario}' AND senha = '{$vsenha}' AND estabelecimento = '{$estabelecimento}' ";
 
$result = mysqli_query($con, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['estabelecimento'] = $estabelecimento;

	header('Location: ../pages/menu.php');
	exit();
} else { 
	unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
	 header('Location:../index.php');

}


