<?php
error_reporting(E_ALL | E_STRICT); //Irá mostrar qualquer erro
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mostrar Produtos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../css/produtos.css">
    <link rel="stylesheet" href="../css/padrao.css">
</head>
<body>



<?php
include 'conexao.php';
mysqli_set_charset($con, 'utf8');

if ($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
$search = $_POST['search'];
$query = "SELECT * FROM produtos WHERE   estabelecimento = '{$search}' ORDER BY id";
$estabelecimento = $search;

if ($result = mysqli_query($con, $query)) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<section id="produtos">';
        echo '
<form action="solicitar.php" method="post">
        <ul class="collection">
   <li class="collection-item">' .
            '<span class="center" style="display:none;" id="estabelecimento" name="estabelecimento" value=' . $estabelecimento . '>' . $estabelecimento . '</span>' .
            '<input type="hidden" name = "estabelecimento"value = '.$estabelecimento.' readonly>'.
            '<span id="produto">' . $row["produto"] . '</span>'.
            '<input type="hidden" name = "produto" value = "'.$row["produto"].'" readonly>'
            . '<br>' .
            'Observação :'.
            '<span id="marca">' . $row["marca"] . '</span>'.

            '<input type="hidden" name = "marca" value = "'.$row["marca"].'" readonly>'.

            '<br>' .
            'Tipo: ' .
            $row["tipo"] .
            '<input type="hidden"  name = "tipo"value = "'.$row["tipo"].'" readonly>'.
            '<br>' .
            'Observação: ' .
            $row["obs"] .
            '<input type="hidden" name = "obs"value = "'.$row["obs"].'" readonly>'.
            '<br>'
            . 'Preço: '
            . '<span class="red-text">' . $row["preco"] . '</span>'.
            '<input type="hidden" name = "preco" value = '.$row["preco"].' readonly>'
            . '<br>'
            . '<button type="submit" id = "add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
   </i></button>'.
            '</form>'.
            /*. '<a href="../php/carrinho.php?acao=add&estabelecimento=' . $estabelecimento . '&id=' . $row['id'] . 'type="submit" name="action"' . 'id="add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
</i></a>*/
            '</li>
  
 </ul>
 </section>';
    }
}
?>
<a href="../menu.php"><i class="material-icons">undor</i></a>

</body>
</html>