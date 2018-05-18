<h2>excluir</h2>


<form method="post" action="?acao=excluir">

    <input type="hidden" name="id" value="<?= $categoria->getId()  ?>">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome()  ?>" disabled/>
    <br>
    <label for="descricao">Descricao</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3" disabled><?=$categoria->getDescricao();?></textarea>
    <br>
    <input type="submit" name="excluir" value="Excluir">
</form>




