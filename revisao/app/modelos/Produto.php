<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 08:49
 */

class Produto
{
    private $id_produto;
    private $nome;
    private $descricao;
    private $foto;
    private $preco;
    private $id_categoria;


    public function __construct($id_produto, $nome, $descricao, $foto, $preco, $id_categoria){
        $this->id_produto=$id_produto;
        $this->nome=$nome;
        $this->descricao=$descricao;
        $this->foto=$foto;
        $this->preco=$preco;
        $this->id_categoria=$id_categoria;

    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto): void
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto): void
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id_categoria
     */
    public function setIdCategoria($id_categoria): void
    {
        $this->id_categoria = $id_categoria;
    }

}
