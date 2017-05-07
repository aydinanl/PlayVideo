<?php

class Yonetim extends Controller
{
    public function index()
    {
        /*
        $sef = "Swift 3 - PopUp Nasıl Yapılır ? - XCode 8 (Blur Effect)";
        $sef_convert = $system->seflink($sef);
        echo $sef_convert;
        */

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "yonetim/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
    public function Login(){

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "login/index.php";
    }

    public function Categories(){

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "categories/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
    public function Videos(){

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "videos/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }

    public function Comments(){

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "comments/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
}