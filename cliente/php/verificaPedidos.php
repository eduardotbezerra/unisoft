<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta HTTP-EQUIV='refresh' CONTENT='10'> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Title of the document</title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
      <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
    </style>
  </head>
  <body>
      <div id = "atualizaPedidos" class="center">
  <?php
$logado = $_SESSION['usuario'];
$estabelecimento = $_SESSION['estabelecimento'];
    include 'conexao.php';
  $mysqli = new mysqli("localhost", "root", "", "unisoft");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$qtdPedidos = $_SESSION['qtdPedidos'];
if ($result = $mysqli->query("SELECT * FROM pedidos WHERE estabelecimento = '{$estabelecimento}'")) {

    $qtdPedidosAtual = $result->num_rows;
    $_SESSION['qtdPedidos'] = $qtdPedidosAtual;
    if ($qtdPedidosAtual > $qtdPedidos){
        echo "<embed src='../toque/alert.mp3'width='1' height='1'>";
        echo '<script>

        $(document).ready(function(){
            $("#modal1").modal();
        });
    </script>

    <div id="modal1" class="center">
    <div class="modal-content">
      <h4>Novo pedido para <span class= "green-text">'.$estabelecimento.'</span> </h4>
      <p>você tem um novo pedido!</p>
    </div>
    <div class="modal-footer">
    </div>
  </div>';
        
        
    }
    else{
      
    }
    $result->close();
}
?>
</div>
    <!-- jQuery CDN -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $("document").ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>