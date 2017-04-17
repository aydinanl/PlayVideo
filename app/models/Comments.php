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
        $get = $this->db->query("SELECT * FROM as_comments AC INNER JOIN as_user AU ON AC.user_id = AU.user_id INNER JOIN as_movie MO ON AC.movie_id = MO.movie_id ORDER BY AC.comment_date DESC");
        return $get;
    }

}