
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
    <header>
      
    </header>
  <div class="content">
      <table class="highlight white">
        <tr>
          <td class="title"><strong>Produto</strong></td>
          <td class="title"><strong>Marca</strong></td>
          <td class="title"> <strong>Quantidade</strong></td>
          <td class="title"><strong>Tipo</strong></td>
          <td class="title"><strong>Preço</strong></td>
          <td class="title"><strong>Obs</strong></td>
        </tr>  
      <?
      include '../php/conexao.php';

      $result = $obj_mysqli->query("SELECT * FROM `produtos`");
      while ($aux_query = $result->fetch_assoc()) 
        {
        echo '<tr>';
        echo '  <td>'.$aux_query["produto"].'</td>';
        echo '  <td>'.$aux_query["marca"].'</td>';
        echo '  <td>'.$aux_query["quantidade"].'</td>';
        echo '  <td>'.$aux_query["tipo"].'</td>';
        echo '  <td>'.$aux_query["preco"].'</td>';
        echo '  <td>'.$aux_query["obs"].'<a href="#" class=" btn red waves-effect waves-light  right"><i class="material-icons">delete</i></a>
        '.'</td>';
    
    
        echo '</tr>';
      }
      ?>
     
    <a href="#modal1" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>
      </table>

  </div>
   -->
  
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
    <header class="modal-header">
        <h5 class="center">Adicionar Produto</h5>
        </header>
      <div class="modal-content">
        <object data="../pages/inserirProduto.php" width = "100%;" height = "720" type=""></object>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
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