<?php 
session_start();
include('conexao.php');
$vusuario = $_POST["usuario"];
$vsenha = $_POST["senha"];

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 

$query = "select usuario from clientes where usuario = '{$vusuario}' and senha = '{$vsenha}'";
 
$result = mysqli_query($con, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {

	$_SESSION['usuario'] = $usuario;
	header('Location: ../pages/menu.php');
	exit();
} else {

	 
	 
	 header('Location:../index.php');
	 echo '<script> alert("usuário ou senha incorreto") </script>';


	 
	

	 
	 
}


?>