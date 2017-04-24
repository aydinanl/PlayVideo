<?php
class Page extends Controller
{

    public function index($videoID="",$videoAdi="")
    {
        /*
        //Sayfa ID'si yoksa ana sayfaya yönlendir.
        if(empty($sayfaID)){
            header('location: '.URL);
        }
        */
        //Model connections
        $system = $this->model('System');
        $comment    = $this->model('Comments');
        $movie  = $this->model('Movie');

        //Load data from model to views.
        $categories          = $system->getCategories();
        $latestComments = $comment->getLatestComments();
        $get3PopulerVideos  = $movie->get3PopulerVideos();

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "page/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}