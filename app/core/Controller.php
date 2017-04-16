<?php

class Controller
{
    public $db = null;
    function __construct()
    {
        $this->openDatabaseConnection();
    }

    private function openDatabaseConnection()
    {
        //Veritabanı bağlama
        try {
            $this->db = new PDO('mysql:dbname=videoportal;charset=utf8;host=localhost','root',''); //Veritabanına bağlantı
        }catch (PDOException $e) {
            die($e->getMessage());
        }
        //Karakter Sorunu
        $this->db->query("SET NAMES 'utf8'");
        $this->db->query("SET CHARACTER SET 'utf8'");
        $this->db->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci' ");
    }

    public function model($model){
        //echo $model;
        require_once '../app/models/' . $model . '.php';
        return new $model($this->db);
    }
}