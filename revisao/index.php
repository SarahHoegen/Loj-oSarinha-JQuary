<?php
require_once 'app/modelos/CrudCategoria.php';

//Ação principal - LISTAR TODAS AS CATEGORIAS



if(isset($_GET['acao'])){
    $acao=$_GET['acao'];

}else{
    $acao='index';
}

switch ($acao) {
    case 'index':
        $crud=new CrudCategoria();
        $categorias=$crud->getCategorias();
        include "app/views/principal/index.php";
        break;
}