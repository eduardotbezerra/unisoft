<div id="meusProdutos" style="display:flex; justify-content: center">
<div class="content">
  
    
      
  <table class="highlight">
    <tr>
      <td class="title"><strong>Produto</strong></td>
      <td class="title"><strong>Marca</strong></td>
      <td class="title"> <strong>Quantidade</strong></td>
      <td class="title"><strong>Tipo</strong></td>
      <td class="title"><strong>Preco</strong></td>
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
    <h4 class="center">Adicionar produto</h4>
    </header>
  <div class="modal-content">
    <object data="../pages/inserirProduto.php" width = "100%;" height = "720" type=""></object>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
  </div>
</div>

</div>