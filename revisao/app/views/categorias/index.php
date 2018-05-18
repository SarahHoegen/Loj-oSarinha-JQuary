
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../style.css">

    <title>Title</title>
</head>
<body>

<h1>Categorias</h1>
<a href="categorias.php?acao=inserir">Inserir Categoria</a>



<table>
    <tr>
        <th>0</th>
        <th>Nome da Categoria</th>
    </tr>


    <?php foreach ($categorias as $categoria): ?>
        <tr>

            <td> <?= $categoria->getId();           ?>  </td>
            <td> <a href="?acao=exibir&id=<?= $categoria->getId(); ?>"><?= $categoria->getNome();        ?></a> </td>
            <td> <?= $categoria->getDescricao();   ?>  </td>

        </tr>
    <?php endforeach; ?>
</table>

