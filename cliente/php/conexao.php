<?php //variaveis de conexão com o banco de dados
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "unisoft";


$con = new mysqli($localhost, $username, $password, $dbname); // tenta se conectar ao banco de dados
mysqli_set_charset($con, 'utf8'); // para acentuar palavras (utf8)

if($con->connect_error) {
    die("connection failed : " . $con->connect_error); // traz um retorno se a conexão falhar
}
?>

