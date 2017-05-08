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
    public function getAllVideos(){
        $show =  $this->db->query("SELECT * FROM as_movie MO INNER JOIN as_categories AC ON MO.category_id = AC.category_id");
        return $show->fetchAll(PDO::FETCH_OBJ);
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

    public function getVideoByName($videoName){
        $show =  $this->db->query("SELECT * FROM as_movie WHERE sef_link LIKE '%$videoName%' ");
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

    public function addVideo($video_name,$video_url,$video_category,$video_description,$video_sef_url){
        $register = $this->db->prepare("INSERT INTO as_movie (movie_name,movie_description,movie_url,sef_link,category_id) VALUES ( :movie_name, :movie_description, :movie_url, :sef_link, :video_category)");
        $register->execute(array(
            ":movie_name" => $video_name,
            ":movie_description" => $video_description,
            ":movie_url" => $video_url,
            ":sef_link" => $video_sef_url,
            ":video_category" => $video_category
        ));
    }
    public function deleteVideo($videoID){
        $delete_category = $this->db->prepare("DELETE FROM as_movie WHERE movie_id = :id");
        $delete_category->execute(array(
            ':id' => $videoID,
        ));
    }
}