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

    /*Seo İçin Düzenlenmesi*/
    function seflink($sef) {
        $tr  = array('ı','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','ş','Ş',' ');
        $eng = array('i','i','g','g','u','u','o','o','c','c','s','s','-');
        $sef = str_replace($tr,$eng,$sef);
        $sef = mb_strtolower($sef);
        $sef = preg_replace('/&.+?;/','', $sef);
        $sef = preg_replace('/[^%a-z0-9_-]/', '', $sef);
        $sef = str_replace("\\","",$sef);
        $sef = str_replace('"',"",$sef);
        $sef = preg_replace("/'/","",$sef);
        $sef = preg_replace("/ +/"," ",$sef);
        $sef = preg_replace("/\s/","",$sef);
        $sef = preg_replace('/-+/', '-', $sef);
        $sef = preg_replace('|-+|', '-', $sef);
        $sef = trim($sef, '-');
        return $sef;
    }
}