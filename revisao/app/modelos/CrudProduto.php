<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:33
 */
require_once 'DBConnection.php';
require_once 'Produto.php';
class CrudProduto
{
    private $conexao;

    //getCategorias() --retorna uma lista d eobjetos de todas as categorias
    public function getProdutos()
    {
        //conexao
        $this->conexao = DBConnection::getConexao();


        $sql = 'select * from produto';

        $resultado = $this->conexao->query($sql);

        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaProdutos = [];

        foreach ($produtos as $produto) {
          $listaProdutos[] = new Produto($produto['id_produto'], $produto['nome'], $produto['descricao'], $produto['foto'], $produto['preco'],$produto['id_categoria']);


        }
        return $listaProdutos;///select
        //retornar lista de obj
    }

    //getCategoria(1) --retorna o objeto da categoria correspondente


    public function getProduto(int $id)
    {
        //CONEXAO AO BD USANDO BDCONNECTION
        $this->conexao = DBConnection::getConexao();

        //SELECT - TRAZ TODOS OS DADOS DE CATEGORIA
        $sql = "select * from produto where id_produto =" . $id;
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $produto = $resultado->fetch(PDO::FETCH_ASSOC);


        $lista_produto = new Produto($produto['id_produto'], $produto['nome'], $produto['descricao'], $produto['foto'], $produto['preco'],$produto['id_categoria']);

        return $lista_produto;

    }

//
//    public function insertProduto(Produto $prod)
//    {
//
//
//        $this->conexao = DBConnection::getConexao();
//        $dados[] = $prod->getNome();
//        $dados[] = $prod->getDescricao();
//        $sql = "insert into produto () values ('$dados[0]','$dados[1]')";
//        $this->conexao->exec($sql);
//
//
//    }
//
//
//    public function updateProduto(Produto $prod)
//    {
//
//        $this->conexao = DBConnection::getConexao();
//        $id_produto = $prod->getId();
//        $nome = $prod->getNome();
//        $descricao = $prod->getDescricao();
//        //$sql = "update produto set nome_produto= '$nome',descricao_categoria='$descricao' where id_categoria =$id_categoria";
//        try{
//            $res = $this->conexao->exec($sql);
//            return $res;
//        }catch (PDOException $erro){
//            return $erro->getMessage();
//
//        }
//
//
//    }
//
//
//    public function deleteProduto($id_produto)
//    {
//
//        $this->conexao = DBConnection::getConexao();
//        $sql = "delete from produto where id_produto=" . $id_produto;
//        echo $sql;
//        try{
//            $res = $this->conexao->exec($sql);
//            return $res;
//        }catch (PDOException $erro){
//            return $erro->getMessage();
//
//        }

    }
}

