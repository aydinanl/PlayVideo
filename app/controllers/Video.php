<?php


class Video extends Controller
{

    public function index($videoID="",$videoAdi="")
    {
        //Video ID'si yoksa ana sayfaya yönlendir.
        if(empty($videoID)){
            header('location: '.URL);
        }
        $system = $this->model('System');
        $categories     = $system->getCategories();
        $videos = $this->model('Movie');
        $videos_information  = $videos->getVideo($videoID);

        //Increas View count when controller loaded.
        $videos->increasView($videoID);

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "video/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}