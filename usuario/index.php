<!doctype html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css"></style>
	<meta charset="UTF-8">
	<title>Carrinho inicio</title>
</head>
<body>
 <header>
  <h1>Lista de Produtos<h1>
</header>
<?php
	include 'conexao.php';


	Conexao();
    function ListagemProdutos() {
		$localhost = "localhost"; //your host name
		$username = "root"; // your database name
		$password = ""; // your database password
		$dbname = "unisoft";
		

	   $selecao = "SELECT * FROM produtos";
	   
	   $con = new mysqli($localhost, $username, $password, $dbname);
	   mysqli_set_charset($con, 'utf8');


	   $query = mysqli_query( $con,$selecao ) or die( mysqli_error() );

	   while( $linha = mysqli_fetch_array( $query ) ) {
         echo '<section id="produtos">';

	   	   echo '<b>' . utf8_encode($linha['produto']) . '</b> <br>';
	   	   echo '<span class="produto">Preço R$: ' . $linha['preco'] . '</span><br>';
	   	   echo '<a href="carrinho.php?acao=add&id='.$linha['id'].'">Colocar no Carrinho</a>';

         echo '</section>';

	   } // end while...
	}

    ListagemProdutos();

?>

	
		
		
		
	

</body>
</html>