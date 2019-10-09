
<?php

require_once 'conexao.php';
mysqli_set_charset($con, 'utf8');



echo "<div class='container'>";

if( isset($_POST['delete'])){
    $sql = "DELETE FROM produtos WHERE id=" . $_POST['id'];
    if($con->query($sql) === TRUE){
        echo "<div class='alert alert-success'>Produto Deletado</div>";
    }
}


$sql = "SELECT * FROM produtos";
$result = $con->query($sql);


if( $result->num_rows > 0)

{
    
  
?>
<form name="buscar" action="../php/buscaProdutos.php" method="POST">
<div class=" search input-field">
  <input id="search" name="search" type="search" required>
  <label class="label-icon btn-search" for="search"><i class="material-icons">search</i></label>
  <i class="material-icons">close</i>
  <input value="pesquisar" id="pesquisar" class="btn waves-effect waves-blue"id="cadastrar" type="submit" name="action">

</div>
</form><br>


<table class="table table-bordered table-striped">
    <tr>
        <strong>
            <td class="title">produto</td>
        </strong>
        <strong>
            <td class="title">marca</td>
        </strong>
        <strong>
            <td class="title">quantidade</td>
        </strong>
        <strong>
            <td class="title">tipo</td>
        </strong>
        <strong>
            <td class="title">preco</td>
        </strong>
        <strong>
            <td class="title">obs</td>
        </strong>
        <td></td>
    </tr>
    <?php
    while( $row = $result->fetch_assoc()){
        echo "<form action='' method='POST'>";
        echo "<input type='hidden' value='". $row['id']."' name='id' />"; 
        echo "<tr>";
        echo "<td>".$row['produto'] . "</td>";
        echo "<td>".$row['marca'] . "</td>";
        echo "<td>".$row['quantidade'] . "</td>";
        echo "<td>".$row['tipo'] . "</td>";
        echo "<td>".$row['preco'] . "</td>";
        echo "<td>".$row['obs'] . "</td>";
        echo "<td><button style='width:8vw; border-radius: 5px;' id='excluir' type='submit' name='delete' value='Delete' class='waves-effect waves-light btn'>x</button></td>
        ";
        echo "</tr>";
        echo "</form>"; 
        
    }
?>
</table>

<?php
}
else
{
    echo "<br><br>Não há produtos cadastrados";
}