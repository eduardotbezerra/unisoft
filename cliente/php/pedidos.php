<?php

$logado = $_SESSION['usuario'];
$estabelecimento = $_SESSION['estabelecimento'];
include 'conexao.php';


$sql = "SELECT * FROM pedidos WHERE estabelecimento = '$estabelecimento' ORDER BY produto";
$resultado = mysqli_query($con, $sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $userId = $registro['userId'];
    echo '
        <ul class="collection with-header">
        <li class="collection-header center"><h6><div> <a href = "#' . $userId . '"class ="modal-trigger"><span>' . $userId . '</span></a></h6></li>
        <li class="collection-item">
        <button class = "btn right waves-white waves-effect"><i class = "material-icons">shopping_cart</i></button>
<button class = "btn right red waves-effect waves-black"><i class = "material-icons">remove_shopping_cart</i></button>
        
</li>
        </li>
        </a>
        </div>
        
        </li>
      </ul>';
}


$sqll = "SELECT * FROM pedidos WHERE estabelecimento = '$logado'";
$resultadoo = mysqli_query($con, $sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registroo = mysqli_fetch_array($resultadoo)) {
    $userId = $registroo['userId'];

    echo '
    <div id = "' . $userId . '" class="modal modal-fixed-footer" style = "height: 100vh; text-transform: capitalize;">
    <header class="modal-header">
            <h5 class="center blue-text"> ' . $userId . '</h5>
        </header>
                <div class="modal-content" style = "height: 100%;">';

    $sql = "SELECT * FROM pedidos WHERE estabelecimento = '$logado' and userId = '$userId' ";
    $resultado = mysqli_query($con, $sql) or die("Erro ao retornar dados");

    // Obtendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado)) {

        echo '
        <ul class="collection with-header">
        <li class="collection-header center"><h6>' . $registro['produto'] . '</h6></li>
        <li class="collection-item">
        <div> Produto: ' . $registro['marca'] . '
        <div>Tipo: ' . $registro['tipo'] . '
        <div>Obs: ' . $registro['obs'] . '
        <div class = "center green-text">Preço: ' . $registro['preco'] . '<a href="#!">
        </a>
        </div>
        </li>
      </ul>';

    }

    echo '
                </div>

    </div>';

}


