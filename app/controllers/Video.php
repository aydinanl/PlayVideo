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
        $system     = $this->model('System');
        $videos     = $this->model('Movie');
        $comment    = $this->model('Comments');
        $movie      = $this->model('Movie');


        //Increas View count when controller loaded.
        $videos->increasView($videoID);

        //Load data from model to views.
        $categories          = $system->getCategories();
        $videos_information  = $videos->getVideo($videoID);
        $latestComments = $comment->getLatestComments();
        $videoComments = $comment->getVideoComments($videoID);
        $get3PopulerVideos  = $movie->get3PopulerVideos();
        $catID = $videos->getCatIDbyVideo($videoID);
        $similarVideos = $videos->similarVideos($catID,6);

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "video/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
    public function YorumEkle($videoID,$videoAdi=""){
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_comment"])) {
            $comment    = $this->model('Comments');
            $name = $_POST["adsoyad"];
            $mail = $_POST["eposta"];
            $website = $_POST["web"];
            $comments = $_POST["mesaj"];

            $comment->addComment($videoID,$name,$mail,$website,$comments);
        }
        // where to go after song has been added
        header('location: ' . URL . 'Video/'.$videoID.'/'.$videoAdi);
    }
}