<?php

require_once '../modelos/CrudCategoria.php';

//Ação principal - LISTAR TODAS AS CATEGORIAS



if(isset($_GET['acao'])){
    $acao=$_GET['acao'];

}else{
    $acao='index';
}

switch ($acao){
    case 'index':
        echo "VOCE ESCOLHEU INDEX";

        $crud=new CrudCategoria();
        $categorias=$crud->getCategorias();
        echo ('<pre>');
        //exibir
        include '../views/templates/cabecalho.php';
        include '../views/categorias/index.php';
        include '../views/templates/rodape.php';

        break;


    case 'inserir':

        if(!isset($_POST['gravar'])) {

            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';

        }else{
            //gravar dados digitados no BD

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CrudCategoria();
            $crud->insertCategoria($novaCat);
            header('Location: categorias.php');
        }

        break;

    case 'exibir':

        $id= $_GET['id'];
        $crud=new CrudCategoria();
        $categoria=$crud->getCategoria($id);
        include '../views/categorias/exibir.php';
        break;

    case 'alterar':

        if(!isset($_POST['gravar'])) {
            $id= $_GET['id'];
            $crud=new CrudCategoria();
            $categoria=$crud->getCategoria($id);
            include '../views/templates/cabecalho.php';
            include '../views/categorias/alterar.php';
            include '../views/templates/rodape.php';

        }else{
            //gravar dados digitados no BD
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria($id, $nome, $descricao);
            $crud = new CrudCategoria();
            $res = $crud->updateCategoria($novaCat);

            if ($res == 1){
                header('location: categorias.php');
            }else{
                echo $res;
            }
        }

        break;
    case 'excluir':

        if(!isset($_POST['excluir'])) {
            $id= $_GET['id'];
            $crud=new CrudCategoria();
            $categoria=$crud->getCategoria($id);
            include '../views/templates/cabecalho.php';
            include '../views/categorias/excluir.php';
            include '../views/templates/rodape.php';

        }else{
            //gravar dados digitados no BD
            $id = $_POST['id'];
            $crud = new CrudCategoria();
            $res = $crud->deleteCategoria($id);

            if ($res == 1){
                header('location: categorias.php');
            }else{
                echo $res;
            }
        }

        break;


    default:
        echo"Acao inválida";
}