<?php
//Iniciando a sessão:

    session_start();
    
$usuario = $_SESSION['usuario'];
$nome = $_SESSION['nome'];
?>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/padrao.css">
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
</style>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" class="brand-logo center">Bring Me</a>
                    <a href="#" data-activates="mobile-menu" class="button-collapse show-on-large"><i
                            class="material-icons">menu</i></a>
                    <ul id="mobile-menu" class="side-nav">
                        <li>
                            <div class="userView">
                                <div class="background">

                                </div>
                                <a href="#!user"><img class="circle" src="img/perfil.png" alt=""></a>
                                <a href="#!name"><span class="white-text name"><?php echo $nome ?></span></a>
                                <a href="#!email"><span class="white-text email">Rua dos desgovernados</span></a>
                            </div>
                        </li>
                        <li>
                        <li style="margin-left: 4vw;">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                   
                                    <a class="collapsible-header">Solicitar Compras</a>
                                    <div class="collapsible-body">
                                       
                                        <ul style="display:flex; justify-content:center; align-text:center;">

                                            <form action="php/buscaEstabelecimentos.php" method="post" style="width: 50%;" class="center black-text">

                                                <input id="search" name="search" type="search" placeholder="ex: osvaldo" require>
                                                <button class="waves-effect material-icons  waves-red" type="submit" name="action">
                                                    <i class="material-icons black-text " style="font-size: 1em; background-color: transparent;" >search</i>
                                                </button>
                                                

                                            </form>
                                        

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        </li>
                        <li><a href="#!">Minhas Compras</a></li>

                        </li>
                        <li><a href="#!">Configurações</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>

    </main>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $("document").ready(function() {
        $(".button-collapse").sideNav();
    });
    </script>
</body>

</html>
