<?php
session_start();
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
}
$logado = $_SESSION['usuario'];
$estabelecimento = $_SESSION['estabelecimento'];
    include '../php/conexao.php';
    
?>

<html lang="en">

  <head>
      <meta charset="UTF-8">
      <title>Meus Pedidos</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
         
      <link rel="stylesheet" href="css/meusPedidos.css">
      <script> 
   </script>


  </head>
  <div id = "atualiza">
    <object data="../php/verificaPedidos.php" class="center" type="" width = "30%" height = "30%;" style = "margin-left: 35vw;"></object>
</div>
 
 
      <?php
     include '../php/pedidos.php';
     ?>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="psha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
              
      <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     
      <script>
          $("document").ready(function() {
              $(".button-collapse").sideNav();
          });
          $('.modal').modal();
          $( "button.excluir" ).click(function() {
              $(this).parent().parent().remove();
          });
          
          
      </script>
      <script>


      </script>
  </body>
</html>