<?php

//класс по названию 1 таблицы (авторы)
class info
{
    //Переменная подключения БД и имя первой таблицы
    private $conn;
    private $tablname = "info";

    public $id_info;
    public $aboutme;


    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function getAll()
    {
        $query = "SELECT aboutme FROM info WHERE 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }



}


