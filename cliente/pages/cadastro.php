<?php
error_reporting(E_ALL|E_STRICT); //Irá mostrar qualquer erro

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title of the document</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/cadastro.css">


<body>

<section class="form-section">
    <div class="form-wrapper">
        <form action="../php/cadastro.php" method="POST">
            <div class="input-block">
                <label for="estabelecimento">Estabelecimento</label>
                <input type="text" id="estabelecimento" name="estabelecimento" required>
            </div>
            <div class="input-block">
                <label for="estabelecimento">Endereço</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="input-block">
                <label for="estabelecimento">Telefone</label>
                <input type="number" id="telefone" name="telefone" required>
            </div>
            <div class="input-block">
                <label for="password">Usuário</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>

            <div class="input-block">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-block">
                <label for="password">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn-login">Cadastrar</button>
            <a href="../index.php"class="right"> Já possuo uma conta</a>
        </form>
    </div>
</body>

</html>