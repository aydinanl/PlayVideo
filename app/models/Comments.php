<?php

class Comments
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getLatestComments(){
        $get = $this->db->query("SELECT * FROM as_comments AC INNER JOIN as_movie MO ON AC.movie_id = MO.movie_id ORDER BY AC.comment_date DESC");
        return $get;
    }

    public function getVideoComments($movieId){
        $get = $this->db->query("SELECT * FROM as_comments AC INNER JOIN as_movie MO ON AC.movie_id = MO.movie_id WHERE AC.movie_id = $movieId ORDER BY AC.comment_date DESC");
        return $get;
    }
    public function addComment($videoID,$name,$mail,$website,$comments){
        $kayit = $this->db->prepare("INSERT INTO as_comments(name_surname,email,website,movie_id,comment) VALUES ( :namesurname , :email , :website , :movie_id , :comment)");
        $kayit->execute(array(
            ":namesurname" => $name,
            ":email" => $mail,
            ":website" => $website,
            ":movie_id" => $videoID,
            ":comment" => $comments
        ));
    }
}