<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Faça seu cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="https://kit.fontawesome.com/8d96ddd920.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- TOP -->
    <div class="header-top">
        <h1><i class="fas fa-users"></i></h1>
    </div>

    <!-- FORM SECTION -->
    <section class="form-section">
        <h1>Cadastre-se</h1>
        <div class="form-wrapper">
            <form action="../php/cadastro.php" method="post">
            <div class="input-block">
                    <input type="text" placeholder="Nome Comṕleto" name ="nome" required>
                </div>
                <div class="input-block">
                    <input type="text" placeholder="Endereço" name = "endereco" required>
                </div>
                <div class="input-block">
                    <input type="number" placeholder="Whatsapp" name = "numero">
                </div>
                <div class="input-block">
                    <input type="text" placeholder="Usuário" name ="usuario" required>
                </div>

                <div class="input-block">
                    <input type="email" placeholder="Email" name = "email" required>
                </div>

                <div class="input-block">
                    <input type="password" placeholder="Senha" name = "senha" required>
                </div>

                <button class="btn-cadastro" type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>