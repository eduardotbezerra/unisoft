<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = ""; 
$dbname = "unisoft";
$con = new mysqli("localhost", "id11161822_root", "bringme2019", "id11161822_bringme");

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
$usuario = $_POST["usuario"];
$vsenha = $_POST["senha"];

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$query = "select usuario from clientes where usuario = '{$usuario}' and senha = '{$vsenha}'";
 
$result = mysqli_query($con, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {

	$_SESSION['usuario'] = $usuario;
	header('Location: ../pages/menu.php');
	exit();
} else { 
	 header('Location:../index.php');

}


?>