<?php

class Categories
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getCatId($videoid){
        $get = $this->db->query("SELECT * FROM as_categories WHERE ");
        return $get;
    }
}