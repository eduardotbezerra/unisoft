<?php
session_start();
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:../index.php');
}

$logado = $_SESSION['usuario'];
$telefone = $_SESSION['telefone'];
$estabelecimento = $_SESSION['estabelecimento'];


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bring Me</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="../css/menu.css">

</head>

<body>

<nav>
    <div class="bar-menu nav-wrapper">
        <div class="container">
            <!-- mobile menu trigger -->
            <a href="#" data-activates="mobile-menu" class="button-collapse show-on-large"><i
                        class="material-icons">menu</i></a>
            <form action="../php/menu.php" method="post" name="menu">
                <!-- desktop menu content -->
                <ul class="right hide-on-med-and-down">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs ">
                                <li class="tab white-text"><a class="white-text" href="#paginaInicial"> Página
                                        Inicial</a></li>
                                <li class="tab white-text "><a class="white-text" href="#produtos"> Produtos</a></li>
                                <li class="tab white-text"><a class="white-text" href="#pedidos">Pedidos</a></li>
                                <button class="btn-large transparent" style = "height: 50px" type="submit" name="sair"><i class="material-icons" style="display: flex; flex-direction: column; justify-content:center;">exit_to_app</i></button>

                            </ul>
            </form>
        </div>
        <ul id="mobile-menu" class="side-nav">
            <li>
                <div class="userView">
                    <div class="background" style="background-color: #FF6A20">

                    </div>
                    <span class="white-text name center"><h5> <?php echo $estabelecimento; ?></h5></span>
                    <a href="#!phone"><span class="white-text tel" type="tel"><?php echo $telefone; ?></span></a>
                </div>
            </li>
            <li><a href="Perfil!">Perfil</a></li>
            <li><a href="Configuacoess!">Configurações</a></li>

    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $("document").ready(function () {
        $(".button-collapse").sideNav();
    });
</script>
</body>
<div id="paginaInicial" class="col s12" width="100vw" height="600px">
    <object data="paginaInicial.php" type=""
            width="100%" height="552px"></object>
</div>
<div id="produtos" class="col s12" width="100vw" height="600px">
    <object data="listarProdutos.php" type=""
            width="100%" height="552px"></object>
</div>
<div id="pedidos" class="col s12">
    <object data="meusPedidos.php" type="" width="100%" height="552px">
</div>


<script>
    $('ul.tabs').tabs();
    $('.modal').modal();
</script>
</html>
