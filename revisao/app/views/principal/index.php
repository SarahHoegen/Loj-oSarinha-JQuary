<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="app/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready (function(){
            $("#abas ul li").addClass("selecionado");

            $("#abas ul li").click(function(){

                $(this).toggleClass("selecionado");

                var meuid = $(this).attr("id");
                $("."+meuid).toggle();

            });
        });


    </script>
    <title>Title</title>
</head>
<body>


<div id="abas">
    <ul>

            <?php foreach ($categorias as $categoria): ?>



        <li id="aba<?= $categoria->getId(); ?>" class="selecionado"> <?= $categoria->getNome();  ?> </li>

            <?php endforeach; ?>
    </ul>

    <div id="conteudos">

        <div class="conteudo aba1">
            Conteudo aba1
        </div>
        <div class="conteudo aba2">
            Conteudo aba2
        </div>
        <div class="conteudo aba3">
            Conteudo aba3
        </div>
    </div>
</body>
</html>