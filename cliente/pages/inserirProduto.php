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
    <link rel="stylesheet" href="../css/inserirProduto.css">
    
    <style>
        body {
           

            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        
        main {
            flex: 1 0 auto;
        }
    </style>
</head>

<body>
    <form action="../php/inserirProduto.php" method="POST">
        <div class="content">
            <div class="input-field col s12 l6">
                <input type="text" id="produto" name="produto" placeholder="ex:farinha" class="validate" required>
                <label for="produto">Produto</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" id="marca" name="marca" class="validate" placeholder="farinha da terra" required>
                <label for="marca">Marca</label>
            </div>
            <div class="input-field col s12">
                <input type="number" id="quantidade" name="quantidade" placeholder="10" class="validate" required>
                <label for="quantidade">Quantidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text" id="tipo" name="tipo" placeholder="cereal" class="validate" required>
                <label for="tipo">tipo</label>
            </div>
            <div class="input-field col s12">
                <input type="number" id="preco" name="preco" placeholder="5, 00 R$" lass="validate" required>
                <label for="quantidade">preco</label>
            </div>
            <div class="input-field col s12">
                <textarea id="obs" id="obs" name="obs"></textarea>
                <label for="obs">obs</label>

            </div>
        </div>
        <div class="btns">

            <button class="btn waves-effect waves-light green " id="cadastrar" type="submit" name="action">Cadastrar
                <i class="material-icons right">send</i>
              </button>
            <button class="btn waves-effect waves-light red " id="cancelar" type="submit" name="action">cancelar
                     <i class="material-icons right">cancel</i>
                   </button>
        </div>

    </form>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

</html>