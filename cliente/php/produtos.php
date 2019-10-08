<?php

require_once 'conexao.php';
mysqli_set_charset($con, 'utf8');



echo "<div class='container'>";

if( isset($_POST['delete'])){
    $sql = "DELETE FROM produtos WHERE id=" . $_POST['id'];
    if($con->query($sql) === TRUE){
        echo "<div class='alert alert-success'>Successfully delete user</div>";
    }
}

$sql = "SELECT * FROM produtos";
$result = $con->query($sql);
echo "<a href='#modal1'id='adicionar' class='btn-floating waves-effect waves-light red modal-trigger'><i class='material-icons'>add</i></a>";

if( $result->num_rows > 0)
{
?>

<table class="table table-bordered table-striped">
    <tr>
        <strong><td>produto</td></strong>
        <strong><td>marca</td></strong>
        <strong><td>quantidade</td></strong>
        <strong><td>tipo</td></strong>
        <strong><td>preco</td></strong>
        <strong><td>obs</td></strong>
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
        echo "<td><button style='width:8vw; border-radius: 5px;' id='excluir' type='submit' name='delete' value='Delete' class='waves-effect waves-light btn'>excluir</button></td>";
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