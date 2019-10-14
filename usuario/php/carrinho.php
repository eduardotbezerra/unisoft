<?php
?>
<?php
session_start();
?>

<?php
$localhost = "localhost";
		$username = "root";
		$password = "";
		$dbname = "unisoft";
		$estabelecimento = $_GET['estabelecimento'];
	   $selecao = "SELECT * FROM produtos WHERE userId = '$estabelecimento' ORDER BY produto ASC";
	   
	   $con = new mysqli($localhost, $username, $password, $dbname);
	   mysqli_set_charset($con, 'utf8');


	   $query = mysqli_query( $con,$selecao ) or die( mysqli_error() );
function AdicionaCarrinho() {


 if ( !isset( $_SESSION['carrinho'] ) ) {
 	$_SESSION['carrinho'] = array();
 }

  ///////////////////////////////////////
 // ADICIONA CARRINHO...
//////////////////////////////////////

 if ( isset( $_GET['acao'] ) ) {

 	if ( $_GET['acao'] === 'add' ) {

 		$id = intval( $_GET['id'] );
 		if ( !isset( $_SESSION['carrinho'] [ $id ] ) ) {
           $_SESSION['carrinho'] [ $id ] = 1;
 		}

 		else {
 		   $_SESSION['carrinho'] [ $id ] += 1;
 		}

 	}

} // end adiciona carrinho...

function RemoveCarrinho() {

  ///////////////////////////////////////
 // REMOVER CARRINHO...
//////////////////////////////////////

 	if ( $_GET['acao'] === 'del' ) {

 		$id = intval( $_GET['id'] );
 		if ( isset( $_SESSION['carrinho'] [ $id ] ) ) {
           unset( $_SESSION['carrinho'] [ $id ] );
 		}
 	}

} // end remove carrinho...

function AlteraQuantidade() {

  ///////////////////////////////////////
 // ALTERAR QUANTIDADE...
//////////////////////////////////////

    if ( $_GET['acao'] === 'up' ) {

    	if ( is_array( $_POST['produto'] ) ) {
    		foreach ( $_POST['produto'] as $id => $quantidade ) {

    			$id = intval( $id );
    			$quantidade = intval( $quantidade );

    			if ( !empty( $quantidade ) || $quantidade <> 0 ) {
                   $_SESSION['carrinho'] [ $id ] = $quantidade;
    			}

    			else {
    				unset( $_SESSION['carrinho'] [ $id ] );
    			}
    		}
    	}
    }
 }

} // end altera quantidade...


AdicionaCarrinho();
RemoveCarrinho();
AlteraQuantidade();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/carrinho.css">

    <style>
    body {
       
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
    <header>
    </header>

   

        <form action="?acao=up" method="post">
            <?php
         
  ///////////////////////////////////////
 // ADICIONA CARRINHO...
//////////////////////////////////////
        include 'conexao.php';
		mysqli_set_charset($con, 'utf8');


          if ( count( $_SESSION['carrinho'] ) === 0 ) {
          	echo '<h4 class="center" style="display:flex; justify-content:center; margin-top: 45vh;"> Não Há Produtos No Seu Carrinho De Compras
          	</h4>';
          }

          else {
          	foreach ( $_SESSION['carrinho'] as $id => $quantidade ) {

          		$selecao = "SELECT * FROM produtos WHERE id = '$id'";
          		$query = mysqli_query($con,$selecao ) or die( mysqli_error() );
          		$linha = mysqli_fetch_array( $query );

          		$produto = $linha['produto'];
				  $preco =  $linha['preco'];
				  $obs = $linha['obs'];
				  $subTotal = $linha['preco'] * $quantidade;
				  
				  
          	  $total += $subTotal;
echo '<tbody>';
echo'<ul class="collection with-header">

<li class="collection-item">
Produto: '.$produto.'<br>
<span>Quantidade/Kg</span><br>
<input type="text" style="" name="produto['.$id.']" value="'.$quantidade.'"/> <span></span><br>
<span>Observação: '.$obs.'</span><br>
<span>Preço: R$'.$preco.'</span><br>
<span>Subtotal: R$'.$subTotal.'</span><br>
<a class="deletar" href="?acao=del&estabelecimento='.$estabelecimento.'&id='.$id.'">Remover</a>



</li>

</ul>';

		  
		 


						  
						  
          	}
          }

				?>
				<?php
				echo'
				 <div class="preco red-text" >
				 <span>'.'TOTAL: '.'R$ '.$total.'</span>
				 </div>';
	
		  
?>
			
		</form>

		
	
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>

</html>