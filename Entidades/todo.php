<?php

require './Db/database.php';
class Todo
{

    private $id;
    private $descricao;
    private $data;
    private $status;

    public function __construct($id = null, $descricao = null, $data = null, $status = null)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->status = $status;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }
    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function inserirTodo()
    {
        $this->data = date('Y-m-d');
        $this->status = "em processo";

        $db = new Database('todo');
        $this->id = $db->inserir([
            'descricao' => $this->descricao,
            'data' => $this->data,
            'status' => $this->status
        ]);

        return $this->id;
    }
}
