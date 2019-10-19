<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Faça seu Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="https://kit.fontawesome.com/8d96ddd920.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- TOP -->
    <div class="header-top">
        <h1><i class="fas fa-user"></i></h1>
    </div>

    <!-- FORM SECTION -->
    <section class="form-section">
        <h1>entrar</h1>
        <div class="form-wrapper">
            <form action="../php/login.php" method="post">
            <div class="input-block">
                    <input type="text" placeholder="Nome" name = "nome" required>
                </div>
                <div class="input-block">
                    <input type="text" placeholder="Usuário" name = "usuario" required>
                </div>

                <div class="input-block">
                    <input type="password" placeholder="Senha" name = "senha" required>
                </div>

                <button class="btn-cadastro" type="submit">login</button>
                <a href = "cadastro.php" class ="right"> Não tenho uma conta <a>
            </form>
        </div>
    </section>
</body>
</html>