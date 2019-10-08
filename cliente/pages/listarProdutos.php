
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Title of the document</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/listarProdutos.css">
    
    <style>
      body {
        font-family: Roboto, Arial, sans-serif;

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
    <header>
      
    </header>
  <div class="content">
    <?php
    include '../php/produtos.php';
    ?>
     
    </div>

  
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
    <header class="modal-header">
        <h5 class="center">Adicionar Produto</h5>
        </header>
      <div class="modal-content">
        <object data="../pages/inserirProduto.php" width = "100%;" height = "720" type=""></object>
      </div>
      <div class="modal-footer">
      <a href="#modal1" id = "fechar" class="btn-floating red waves-effect waves-light red modal-close"><i class="material-icons">close</i></a>
      </div>
    </div>
 
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $("document").ready(function(){
        $(".button-collapse").sideNav();
      });
      $('.modal').modal();
    </script>
  </body>
</html>





</html>