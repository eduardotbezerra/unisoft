<?php


require_once 'conexao.php';

if($_GET) {
    $id = $_GET['id'];
    echo $id;

    $sql = " DELETE FROM produtos WHERE id = $id;";
    if($con->query($sql) === TRUE) {
        echo "<p>Foi removido</p>";
        echo "<a href='../pages/listarProdutos.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $con->error;
    }


}


