<?php
error_reporting(E_ALL | E_STRICT); //Irá mostrar qualquer erro

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
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }
    </style>
</head>
<body>
<form action="../php/carrinho.php?acao=up" method="post">
    <?php
    include 'conexao.php';
    mysqli_set_charset($con, 'utf8');

    if ($con->connect_error) {
        die("connection failed : " . $con->connect_error);
    }
    $search = $_POST['search'];
    $query = "SELECT * FROM produtos WHERE   userId = '{$search}' ORDER BY id";
    $estabelecimento = $search;

    if ($result = mysqli_query($con, $query)) {

        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<section id="produtos">';
            echo '
        <ul class="collection">
   <li class="collection-item">' .
                '<span class="center" style="display:none;" id="estabelecimento" name="estabelecimento" value=' . $estabelecimento . '>' . $estabelecimento . '</span>' .
                '<span id="produto">' . $row["produto"] . '</span>'
                . '<br>' .

                '<br>' .
                'Tipo: ' .
                $row["tipo"] .
                '<br>' .
                'Observação: ' .
                $row["obs"] .
                '<br>'
                . 'Preço: '
                . '<span class="red-text">' . $row["preco"] . '</span>'
                . '<br>'
                . '<a href="../php/carrinho.php?acao=add&estabelecimento=' . $estabelecimento . '&id=' . $row['id'] . 'type="submit" name="action"' . 'id="add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
   </i></a>
   </li>
  
 </ul>
 </section>';
        }
    }
    ?>
    <a href="../menu.php"><i class="material-icons">undor</i></a>
    <form>
</body>
</html>