<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 08:48
 */

class Categoria
{

    private $id_categoria;
    private $nome;
    private $descricao;



    public function __construct($id_categoria, $nome, $descricao){
        $this->id_categoria=$id_categoria;
        $this->nome=$nome;
        $this->descricao=$descricao;

    }
    /**
     * @return mixed
     */



    public function getId()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id_categoria
     */
    public function setId($id_categoria)
    {
        $this->id_categoria = $id_categoria;
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
    public function setNome($nome)
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
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }




}





