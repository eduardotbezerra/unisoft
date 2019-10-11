<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Mostrar Produtos</title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
      <link rel="stylesheet" href="../css/produtos.css">
            <link rel="stylesheet" href="../css/padrao.css">

   
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }

    </style>
  </head>
  <body>
  <form action="../php/carrinho.php?acao=up" method="post">
  <?php
 
    $localhost = "localhost";
      $username = "id11161822_root";
      $password = "bringme2019";
      $dbname = "id11161822_bringme";
      $con = new mysqli($localhost, $username, $password, $dbname);
    $search = $_POST["search"];

    
    $con = new mysqli($localhost, $username, $password, $dbname);
    mysqli_set_charset($con, 'utf8');

    
    if($con->connect_error) {
        die("connection failed : " . $con->connect_error);
    }
    $sql = mysqli_query($con, "SELECT table_name FROM information_schema.tables where table_schema = 'id11161822_bringme'");


    while (list ($estabelecimento) = mysqli_fetch_row ($sql)) {
        if ($estabelecimento == $search){
            $sql = "SELECT * FROM $search";
$result = $con->query($sql);
           
    while( $row = $result->fetch_assoc()){
       
        echo '<section id="produtos">';
        echo'
        <ul class="collection">
   <li class="collection-item">'.
  '<span class="center" style="display:none;" id="estabelecimento" name="estabelecimento" value='.$estabelecimento.'>'.$estabelecimento.'</span>'.
   '<span id="produto">'.$row["produto"].'</span>'
   .'<br>'.
   'Marca: '.
   $row["marca"].
   '<br>'.
   'Tipo: '.
   $row["tipo"].
   '<br>'.
   'Observação: '.
   $row["obs"].
   '<br>'
   .'Preço: '
   .'<span class="red-text">'.$row["preco"].'</span>'
   .'<br>'
   .'<a href="../php/carrinho.php?acao=add&estabelecimento='.$estabelecimento.'&id='.$row['id'].'type="submit" name="action"'. 'id="add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
   </i></a>
  '.$estabelecimento.'
   </li>
  
 </ul>
 </section>'
 ;
    }
            
            
            
        }
        else{
            
        }
        

    }
    

?>
<a href="../menu.php"><i class="material-icons">undor</i></a>

    <form>

  </body>
</html>