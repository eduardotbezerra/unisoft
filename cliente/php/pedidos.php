<?php
$nome = $_SESSION['nome'];
$estabelecimento = $_SESSION['usuario'];
$estabelecimento = $_SESSION['estabelecimento'];
include 'conexao.php';


$sql = "SELECT * FROM pedidos WHERE estabelecimento = '$estabelecimento' ORDER BY id DESC";
$resultado = mysqli_query($con, $sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['usuario'];
    echo '
        <ul class="collection with-header" style ="width:60vw; height: 67vh; margin: auto; padding-top: 2px;  ">
        <li class="collection-header center">
        <h6>
        <div style = "">
         <a href = "#' . $nome . '"class ="modal-trigger">
         <div>Cliente:<span class = "green-text"> ' . $nome . '</span><div>
         Pedido número:<span class = "green-text"> '.$registro['id'].'</span></div>
         </a>
         </h6>
         </li>
         <div>

         </div>
        <li class="collection-item">
      <div style = "display:flex; justify-content: space-between; margin-top: 30vh; ">
        <button class = "btn right waves-white waves-effect"><i class = "material-icons">shopping_cart</i></button>
<button class = "btn right red waves-effect waves-black"><i class = "material-icons">remove_shopping_cart</i></button>
        </div>
</li>
        </li>
        </a>
        </div>
        
        </li>
      </ul>';
}


$sqll = "SELECT * FROM pedidos WHERE estabelecimento = '$estabelecimento'";
$resultadoo = mysqli_query($con, $sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registroo = mysqli_fetch_array($resultadoo)) {
    $nome = $registroo['usuario'];

    echo '
    <div id = "' . $nome . '" class="modal modal-fixed-footer" style = "height: 100vh; text-transform: capitalize;">
    <header class="modal-header">
            <h5 class="center blue-text"> ' . $nome . '</h5>
        </header>
                <div class="modal-content" style = "height: 100%;">';

    $sql = "SELECT * FROM pedidos WHERE estabelecimento = '$estabelecimento' and usuario = '$nome' ORDER BY Id";
    $resultado = mysqli_query($con, $sql) or die("Erro ao retornar dados");

    // Obtendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado)) {

        echo '
        <ul class="collection with-header">
        <li class="collection-header center"><h6>' . $registro['produto'] . '</h6></li>
         <li class="collection-item">
         <div> Marca: ' . $registro['marca'] . '
        <div> Produto: ' . $registro['produto'] . '
        <div>Tipo: ' . $registro['tipo'] . '
        <div>Obs: ' . $registro['obs'] . '
        <div class = "center green-text">Preço: ' . $registro['preco'] . '<a href="#!">
        </a>
        </div>
        </li>
     
      ';


    }

    echo '
                </div>

    </div>';

}
