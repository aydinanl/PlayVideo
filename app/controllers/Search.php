<?php
class Search extends Controller
{

    public function index()
    {

        //Model Connections
        $system = $this->model('System');
        $categories     = $system->getCategories();
        $movie  = $this->model('Movie');
        $comment    = $this->model('Comments');

        //Load data from model to views.
        $comment    = $this->model('Comments');
        $get3PopulerVideos  = $movie->get3PopulerVideos();
        $latestComments = $comment->getLatestComments();

        //Load data from model to views.
        $videoSefName = $system->seflink($_POST['ara']);
        $videos_information  = $movie->getVideoByName($videoSefName);
        $latestComments = $comment->getLatestComments();
        $get3PopulerVideos  = $movie->get3PopulerVideos();

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "search/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}