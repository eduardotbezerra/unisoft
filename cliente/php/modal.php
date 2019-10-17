
<!-- Modal Structure -->
<?php
echo'
    <div id = "'.$userId.'" class="modal modal-fixed-footer" style = "height: 100vh; text-transform: capitalize;">
        <header class="modal-header">
            <h5 class="center blue-text"> '.$userId.'</h5>
        </header>
        <div class="modal-content" style = "height: 100%;">';

            $sql = "SELECT * FROM pedidos WHERE estabelecimento = '$logado' and userId = '$userId' ";
            $resultado = mysqli_query($con, $sql) or die("Erro ao retornar dados");

            // Obtendo os dados por meio de um loop while
            while ($registro = mysqli_fetch_array($resultado)) {
echo'
                <ul class="collection with-header">
        <li class="collection-header center"><h6>'.$registro['produto'].'</h6></li>
        <li class="collection-item">
        <div> Produto: '.$registro['marca'].'
        <div>Tipo: '.$registro['tipo'].'
        <div>Obs: '.$registro['obs'].'
        <div class = "center green-text">Preço: '.$registro['preco'].'<a href="#!">
        </a>
        </div>
        </li>
      </ul>';







            }

           



