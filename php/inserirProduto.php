<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
$obj_mysqli = new mysqli("localhost", "root", "", "unisoft");
 
if ($obj_mysqli->connect_errno) {
    echo "Ocorreu um erro na conexão com o banco de dados.";
    exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');
//Validando a existência dos dados
if(isset($_POST["produto"]) && isset($_POST["marca"]) && isset($_POST["quantidade"]) && isset($_POST["tipo"])&& isset($_POST["obs"]))
{
	if(empty($_POST["produto"]))
		$erro = "Campo produto é obrigatório";
	else
	if(empty($_POST["marca"]))
		$erro = "Campo marca é obrigatório";
	else
	if(empty($_POST["quantidade"]))
		$erro = "Campo quantidade obrigatório";
	else
	if(empty($_POST["tipo"]))
		$erro = "Campo tipo é obrigatório";
	else
	
	
	
	{
 

        $vproduto   = $_POST["produto"];
        $vmarca  = $_POST["marca"];
        $vquantidade = $_POST["quantidade"];
        $vtipo    = $_POST["tipo"];
        $vobs     = $_POST["obs"];
        $vpreco     = $_POST["preco"];
        
        $stmt = $obj_mysqli->prepare("INSERT INTO `produtos` (`produto`,`marca`,`quantidade`,`tipo`,`obs`,`preco`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('ssssss', $vproduto, $vmarca, $vquantidade, $vtipo, $vobs, $vpreco);
        
        if (!$stmt->execute()) {
            $erro = $stmt->error;
        } else {
            echo "
			<script>
            alert('produto adicionado')
			</script>
			";
		}
	}
}
    
?>
</body>

</html>