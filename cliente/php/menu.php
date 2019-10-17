<?php
//Iniciando a sessão:
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

}
session_unset();
//Destruindo a sessão:
session_destroy();
//Mostrando os dados da sessão destruida:
header('Location: ../index.php');

