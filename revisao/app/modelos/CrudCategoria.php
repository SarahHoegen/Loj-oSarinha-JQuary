<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:33
 */
require_once 'DBConnection.php';
require_once 'Categoria.php';
class CrudCategoria
{
    private $conexao;

    //getCategorias() --retorna uma lista d eobjetos de todas as categorias
    public function getCategorias()
    {
        //conexao
        $this->conexao = DBConnection::getConexao();


        $sql = 'select * from categoria';

        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];

        foreach ($categorias as $categoria) {
            $listaCategorias[] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);


        }
        return $listaCategorias;///select
        //retornar lista de obj
    }

    //getCategoria(1) --retorna o objeto da categoria correspondente


    public function getCategoria(int $id)
    {
        //CONEXAO AO BD USANDO BDCONNECTION
        $this->conexao = DBConnection::getConexao();

        //SELECT - TRAZ TODOS OS DADOS DE CATEGORIA
        $sql = "select * from categoria where id_categoria =" . $id;
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $categoria = $resultado->fetch(PDO::FETCH_ASSOC);


        $lista_categoria = new Categoria($categoria["id_categoria"], $categoria ["nome_categoria"], $categoria ["descricao_categoria"]);

        return $lista_categoria;

    }


    public function insertCategoria(Categoria $cat)
    {


        $this->conexao = DBConnection::getConexao();
        $dados[] = $cat->getNome();
        $dados[] = $cat->getDescricao();
        $sql = "insert into categoria (nome_categoria,descricao_categoria) values ('$dados[0]','$dados[1]')";
        $this->conexao->exec($sql);


    }


    public function updateCategoria(Categoria $cat)
    {

        $this->conexao = DBConnection::getConexao();
        $id_categoria = $cat->getId();
        $nome = $cat->getNome();
        $descricao = $cat->getDescricao();
        $sql = "update categoria set nome_categoria= '$nome',descricao_categoria='$descricao' where id_categoria =$id_categoria";
        try{
            $res = $this->conexao->exec($sql);
            return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();

        }


    }


    public function deleteCategoria($id_categoria)
    {

        $this->conexao = DBConnection::getConexao();
        $sql = "delete from categoria where id_categoria=" . $id_categoria;
        echo $sql;
        try{
            $res = $this->conexao->exec($sql);
            return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();

        }

    }
}



