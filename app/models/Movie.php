<?php

class Movie
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    public function get6PopulerVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie ORDER BY movie_view DESC LIMIT 6");
        return $show;
    }
    public function get3PopulerVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie ORDER BY movie_view DESC LIMIT 3");
        return $show;
    }
    public function get4LastestVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie ORDER BY movie_date DESC LIMIT 4");
        return $show;
    }
}