

    <h1>Detalhes da Categoria . <?= $categoria->getNome(); ?> </h1>

    <p>Descrição: <?= $categoria->getDescricao(); ?></p>

    <a href="categorias.php?acao=alterar&id=<?= $categoria->getId(); ?>">Editar a categoria</a>
    <br>
    <a href="categorias.php?acao=excluir&id=<?= $categoria->getId(); ?>">Excluir a categoria</a>



