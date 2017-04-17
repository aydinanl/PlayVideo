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
    public function getVideo($videoID){
        $show =  $this->db->query("SELECT * FROM as_movie WHERE movie_id = $videoID");
        return $show;
    }
    public function increasView($movieID){
        try {
            $update = $this->db->query("UPDATE as_movie SET movie_view = movie_view + 1 WHERE movie_id = $movieID");
        } catch (PDOException $e) {
            exit('Cannot updated.');
        }
    }
}