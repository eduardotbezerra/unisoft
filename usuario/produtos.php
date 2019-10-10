<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/produtos.css">
   
    <style>
    body {
        display: flex;
        min-height: 100vh;
		flex-direction: column;
		font-family: Roboto, Arial, sans-serif;

    }

    main {
        flex: 1 0 auto;
    }
    </style>
</head>

<body>
    <?php
	include 'conexao.php';
	Conexao();
    function ListagemProdutos() {
		$localhost = "localhost"; 
		$username = "root"; 
		$password = ""; 
		$dbname = "unisoft";
	   $selecao = "SELECT * FROM  produtos";	   
	   $con = new mysqli($localhost, $username, $password, $dbname);
	   mysqli_set_charset($con, 'utf8');
	   $query = mysqli_query( $con,$selecao ) or die( mysqli_error() );
	   while( $linha = mysqli_fetch_array( $query ) ) {
		 echo '<section id="produtos">';
		 echo'
		 <ul class="collection">
	<li class="collection-item">'.
	'<span id="produto">'.$linha["produto"].'</span>'
	.'<br>'.
	'Marca: '.
	$linha["marca"].
	'<br>'.
	'Tipo: '.
	$linha["tipo"].
	'<br>'.
	'Observação: '.
	$linha["obs"].
	'<br>'
	.'Preço: '
	.'<span class="red-text">'.$linha["preco"].'</span>'
	.'<br>'.'<a href="carrinho.php?acao=add&id='
	.$linha['id'].'"  id="add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
	</i></a>'
	.'</li>
   
  </ul>
  </section>';
	   } // end while...
	}

    ListagemProdutos();
?>

</body>

</html>