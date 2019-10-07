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
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- LOGIN -->
    <section class="form-section">

        <div class="form-wrapper">
            <form action="php/login.php" method="post">
                <div class="input-block">
                    <label for="usuario">usuario</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>

                <div class="input-block">
                    <label for="senha">Senha</label>
                    <input type="text" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn-login center">Entrar</button>
                <a href="cadastro.php" class="right">Não tenho uma conta</a>
            </form>
        </div>
    </section>
</body>
</html>
