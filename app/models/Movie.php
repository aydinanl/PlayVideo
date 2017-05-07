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
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id ORDER BY MO.movie_view DESC LIMIT 6");
        return $show;
    }
    public function recommendVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id ORDER BY RAND() LIMIT 12");
        return $show;

    }
    public function get3PopulerVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id ORDER BY MO.movie_view DESC LIMIT 3");
        return $show;
    }
    public function get4LastestVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id ORDER BY MO.movie_date DESC LIMIT 4");
        return $show;
    }
    public function getVideo($videoID){
        $show =  $this->db->query("SELECT * FROM as_movie WHERE movie_id = $videoID");
        return $show;
    }

    public function getCatIDbyVideo($videoID){
        $show =  $this->db->query("SELECT category_id FROM as_movie WHERE movie_id = $videoID");
        return $show->fetchObject()->category_id;
    }

    public function getSingleCatVideos($katID,$Limit){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id WHERE MO.category_id = $katID ORDER BY MO.movie_date DESC LIMIT $Limit");
        return $show;
    }

    public function getCategoriesVideos($katID){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id WHERE MO.category_id = $katID ORDER BY MO.movie_date DESC");
        return $show;
    }

    public function increasView($movieID){
        $update = $this->db->query("UPDATE as_movie SET movie_view = movie_view + 1 WHERE movie_id = $movieID");
    }

    public function similarVideos($katID,$Limit){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id WHERE MO.category_id = $katID ORDER BY RAND() LIMIT $Limit");
        return $show;
    }
}