<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Kategori extends Controller
{
    public function index($kategoriID="",$kategoriAdi="")
    {
        if(empty($kategoriID)){
            //Kategori ID yoksa Ana sayfaya yönlendir.
            header('location: '.URL);
        }
        //Model Connections
        $system = $this->model('System');
        $categories     = $system->getCategories();
        $movie  = $this->model('Movie');
        $comment    = $this->model('Comments');

        //Load data from model to views.
        $getCategoryVideos = $movie->getCategoriesVideos($kategoriID);
        $comment    = $this->model('Comments');
        $get3PopulerVideos  = $movie->get3PopulerVideos();
        $latestComments = $comment->getLatestComments();

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "kategori/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}