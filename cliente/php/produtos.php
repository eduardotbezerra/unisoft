<?php
session_start()
?>
<?php
require_once 'conexao.php';
mysqli_set_charset($con, 'utf8');
echo "<div class='container'>";
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$logado = $_SESSION['usuario'];

$sql = "SELECT * FROM produtos WHERE userId = '$logado' ORDER BY produto";
$result = $con->query($sql);
echo '<a href="#modal1" id="adicionar" class="btn-floating waves-effect waves-light red modal-trigger" style = "display: flex; justify-content: center; margin-left: 29vw;"><i class="material-icons">add</i></a>
';

if ($result->num_rows > 0) {

    ?>
    <form name="buscar" action="../pages/buscaProdutos.php" method="POST">
        <div class=" search input-field">
            <input id="search" name="search" type="search" required>
            <label class="label-icon btn-search" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <button value="pesquisar" id="pesquisar" class="btn waves-effect waves-blue" id="cadastrar" type="submit"
                   name="action"><i class="material-icons">search</i></button>

        </div>
    </form><br>

    <div id="scrolltable">

        <table class="table table-highlight table-hover table-striped" id="scrolltable">

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
                <strong>
                    <td class="title">Ações</td>
                </strong>
            </tr>
            <?php

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . "<input type='hidden' name='id' value=" . "delete.php?id=" . $row['id'];
                echo "<td>" . $row['produto'] . "</td>";
                echo "<td>" . $row['marca'] . "</td>";
                echo "<td>" . $row['quantidade'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['preco'] . "</td>";
                echo "<td>" . $row['obs'] . "</td>
                <td><a href='../php/delete.php?id=" . $row['id'] . "'><button type='button' class='btn red' style='border-radius: 20px;'>x</button></a>
                <a href='../php/delete.php?id=" . $row['id'] . "'><button type='button' class='btn white black-text' id = 'editar'>Editar</button></a>
                
                </td>";


                echo "</tr>";

            }
            echo "</form>";
            ?>
        </table>
    </div>
    <?php
} else {
    echo "<br><br>Não há produtos cadastrados";
}