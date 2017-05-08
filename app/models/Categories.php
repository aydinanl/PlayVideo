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

    public function getAllCat(){
        $get = $this->db->query("SELECT * FROM as_categories");
        return $get->fetchAll(PDO::FETCH_OBJ);
    }

    public function addCat($catName,$sef_url){
        $register = $this->db->prepare("INSERT INTO as_categories(category_name,sef_url) VALUES ( :category_name , :sef_url)");
        $register->execute(array(
            ":category_name" => $catName,
            ":sef_url" => $sef_url
        ));
    }
    public function deleteCat($catID){
        $delete_category = $this->db->prepare("DELETE FROM as_categories WHERE category_id = :id");
        $delete_category->execute(array(
            ':id' => $catID,
        ));
    }
}