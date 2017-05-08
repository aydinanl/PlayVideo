<?php

class User
{
    public $name;

    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function makeLogin($mail,$password){

        $get = $this->db->prepare("SELECT * FROM as_user WHERE user_email = :mail AND user_password = :password ");
        $get->execute(array(
            ':mail'=>$mail,
            ':password'=>$password
        ));

        $userRow=$get->fetch(PDO::FETCH_ASSOC);
        if($get->rowCount() > 0)
        {
            //$user_information = $get->fetch(PDO::FETCH_BOTH);
            $_SESSION["id"] = $userRow["user_id"];
            $_SESSION["oturum"] = true;
        }else{
            return false;
        }

    }
}