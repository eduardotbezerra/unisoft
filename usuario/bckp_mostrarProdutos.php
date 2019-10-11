<?php
error_reporting(0);

?>
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
  <?php
 
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unisoft";
$search = $_POST["search"];
    
    
    $con = new mysqli($localhost, $username, $password, $dbname);
    mysqli_set_charset($con, 'utf8');

    
    if($con->connect_error) {
        die("connection failed : " . $con->connect_error);
    }
    $sql = mysqli_query($con, "SELECT table_name FROM information_schema.tables where table_schema = 'unisoft'");


    while (list ($estabelecimento) = mysqli_fetch_row ($sql)) {
        if ($estabelecimento == $search){
            $sql = "SELECT * FROM $search";
$result = $con->query($sql);
           
       
        echo "<div class='container'>";

        if( isset($_POST['delete'])){
            $sql = "DELETE FROM $search WHERE id=" . $_POST['id'];
            if($con->query($sql) === TRUE){
                echo "<div class='alert alert-success'>Produto Deletado</div>";
            }
        }
        echo'
        <form name="buscar" action="buscaProdutos.php" method="POST">
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
    </tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<form action="" method="POST">';
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
    


    
        
    }
            
            
            
        
        

    }
    
    
 

?>
  </body>
</html>