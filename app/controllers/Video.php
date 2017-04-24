<?php


class Video extends Controller
{

    public function index($videoID="",$videoAdi="")
    {
        //Video ID'si yoksa ana sayfaya yönlendir.
        if(empty($videoID)){
            header('location: '.URL);
        }

        //Model connections
        $system = $this->model('System');
        $videos = $this->model('Movie');
        $comment    = $this->model('Comments');


        //Increas View count when controller loaded.
        $videos->increasView($videoID);
        $categories          = $system->getCategories();
        $videos_information  = $videos->getVideo($videoID);
        $latestComments = $comment->getLatestComments();

        $catid = $videos->getCatIDbyVideo($videoID);
        $similarVideos = $videos->similarVideos($catid,6);


        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "video/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}