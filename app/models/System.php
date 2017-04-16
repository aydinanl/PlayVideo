<?php

class System
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    public function getCategories(){
        $get = $this->db->query("SELECT * FROM as_categories");
        return $get;
    }
}