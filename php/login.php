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
 
$result = mysqli_query($obj_mysqli, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../menu.php');
	exit();
} else { echo "error";
}

?>
