

    <?php
$con= new mysqli("localhost", "root", "", "unisoft");
 
if ($con->connect_errno) {
    echo "Ocorreu um erro na conexão com o banco de dados.";
    exit;
}
 
mysqli_set_charset($con, 'utf8');
        $vrestaurante   = $_POST["restaurante"];
        $vusuario  = $_POST["usuario"];
        $vemail = $_POST["email"];
        $vsenha    = $_POST["senha"];
        
      
        $mysqli = new mysqli('localhost', 'root', '', 'unisoft');
        $user = filter_input(INPUT_GET, 'usuario');
        $sql = "SELECT * FROM `clientes` WHERE `usuario` = '{$vusuario} ' "; 
        $query = $mysqli->query( $sql );
        if( $query->num_rows > 0 ) {
          echo 'Usuário já existe!';
        } else {
        $stmt = $con->prepare("INSERT INTO `clientes` (`restaurante`,`usuario`,`email`,`senha`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $vrestaurante, $vusuario, $vemail, $vsenha);
        if (!$stmt->execute()) {
            $erro = $stmt->error;
            echo "
			<script>
            alert('Houve um erro, contate o administrador')
			</script>
			";
        } else {
            echo "
			<script>
            alert(' adicionado')
			</script>
			";
		}
            
            }
          
        
        ?> 

