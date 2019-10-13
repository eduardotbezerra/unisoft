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
	.'<br>'.'<a href="../pages/carrinho.php?acao=add&id='
	.$linha['id'].'"  id="add" class="right btn-floating waves-effect waves-light green"><i class="material-icons">add_shopping_cart
	</i></a>'
	.'</li>
   
  </ul>
  </section>';
	   } // end while...
	}

    ListagemProdutos();
?>