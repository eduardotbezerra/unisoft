<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = ""; 
$dbname = "unisoft";
$con = new mysqli("localhost", "root", "", "unisoft");

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
$usuario = $_POST["usuario"];
$vsenha = $_POST["senha"];

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$query = "select usuario from estabelecimentos where usuario = '{$usuario}' and senha = '{$vsenha}'";
 
$result = mysqli_query($con, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	
	
	header('Location: ../pages/menu.php');
	exit();
} else { 
	unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
	 header('Location:../index.php');

}


?>