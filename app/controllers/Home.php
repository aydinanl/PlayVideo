<?php

class Home extends Controller
{
    public function index()
    {
        /*
         * Methoda model kullanılması için gerekenler:
        $user = $this->model('user');
        $user->name = $name;
        echo $name;
        */
        $system = $this->model('System');
        $movie  = $this->model('Movie');
        $categories = $system->getCategories();
        $comment    = $this->model('Comments');

        $get6PopulerVideos  = $movie->get6PopulerVideos();
        $get3PopulerVideos  = $movie->get3PopulerVideos();
        $latest4Videos  = $movie->get4LastestVideos();
        $latestComments = $comment->getLatestComments();
        $aksiyon    = $movie->getSingleCatVideos(2,4);
        $komedi    = $movie->getSingleCatVideos(3,6);
        $recommendVideos    = $movie->recommendVideos();


        /*
        $sef = "Swift 3 - PopUp Nasıl Yapılır ? - XCode 8 (Blur Effect)";
        $sef_convert = $system->seflink($sef);
        echo $sef_convert;
        */

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "home/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}