<?php

class Home extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($name = 'aydin-batuhan')
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

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "home/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}